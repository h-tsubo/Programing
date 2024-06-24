from typing import List
from fastapi import APIRouter, Depends, HTTPException, Response, status
from schemas import Blog, ShowBlog, User, ShowUser
from database import get_db
import models
from sqlalchemy.orm import Session
from hashing import Hash
from functions import user

router = APIRouter(
    prefix='/user',
    tags=['user']
)

@router.post('')
def create_user(request: User, db: Session = Depends(get_db)):
    return user.create(request, db)
    
@router.get('', response_model=List[User])
def all_fetch(db: Session = Depends(get_db)):
    return user.get_all(db)

@router.get('/{id}', response_model=ShowUser)
def get_user(id: int, db: Session = Depends(get_db)):
    return user.get_one(id, db)

