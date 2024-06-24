from fastapi import HTTPException, status
import models
from schemas import User
from sqlalchemy.orm import Session
from hashing import Hash

def create(request: User, db: Session):
    try:
        new_user = models.User(name=request.name, email=request.email, password=Hash.bcrypt(request.password))
        db.add(new_user)
        db.commit()
        db.refresh(new_user)
        return new_user
    except Exception as e:
        raise HTTPException(status_code=500, detail=str(e))
    
def get_all(db):
    users = db.query(models.User).all()
    return users

def get_one(id: int, db: Session):
    user = db.query(models.User).filter(models.User.id == id).first()
    if not user:
        raise HTTPException(status_code = status.HTTP_404_NOT_FOUND, detail=f'User with the id: {id} is not found.')
    return user