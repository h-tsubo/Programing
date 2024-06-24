from fastapi import HTTPException, status
import models
from schemas import Blog
from sqlalchemy.orm import Session

def get_all(db: Session):
    blogs = db.query(models.Blog).all()
    return blogs

def create(blog: Blog, db: Session):
    new_blog = models.Blog(title=blog.title, body=blog.body, user_id=1)
    db.add(new_blog)
    db.commit()
    db.refresh(new_blog)
    return new_blog

def get_one(id: int, blog: Blog, db: Session):
    blog = db.query(models.Blog).filter(models.Blog.id == id).first()
    if not blog:
        raise HTTPException(status_code = status.HTTP_404_NOT_FOUND, detail=f'Blog with the id: {id} is not found.')
    return blog

def destroy(id: int, db: Session):
    blog = db.query(models.Blog).filter(models.Blog.id == id)

    if not blog.first():
        raise HTTPException(status_code = status.HTTP_404_NOT_FOUND, detail=f'Blog with the id: {id} is not found.')
    blog.delete(synchronize_session=False)
    db.commit()

    return 'Deletion completed'

def update(id: int, request: Blog, db: Session):
    blog = db.query(models.Blog).filter(models.Blog.id == id)

    if not blog.first():
        raise HTTPException(status_code = status.HTTP_404_NOT_FOUND, detail=f'Blog with the id: {id} is not found.')
    
    blog.update(dict(request))
    db.commit()

    return 'Update completed'