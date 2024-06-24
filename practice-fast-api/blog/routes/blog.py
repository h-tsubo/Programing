from typing import List
from fastapi import APIRouter, Depends, HTTPException, Request, Response, status
from schemas import Blog, ShowBlog, User, ShowUser
from database import get_db
import models
from sqlalchemy.orm import Session
from functions import blog

router = APIRouter(
    prefix='/blog',
    tags=['blogs']
)
@router.get('', )
def all_fetch(db: Session = Depends(get_db)):
    return blog.get_all(db)

@router.post('', status_code=status.HTTP_201_CREATED)
def create(request: Blog, db: Session = Depends(get_db)):
    return blog.create(request, db)

@router.get('/{id}', status_code=status.HTTP_200_OK, response_model=ShowBlog)
def show(id: int, response: Response, db: Session = Depends(get_db)):
    return blog.get_one(id, response, db)

@router.delete('/{id}', status_code=status.HTTP_204_NO_CONTENT)
def delete(id: int, db: Session = Depends(get_db)):
    return blog.destroy(id, db)

@router.put('/{id}', status_code=status.HTTP_202_ACCEPTED)
def update(id: int, request: Blog, db: Session = Depends(get_db)):
    return blog.update(id, request, db)