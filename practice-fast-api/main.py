from typing import Optional
from fastapi import FastAPI
from pydantic import BaseModel

class Blog(BaseModel):
    title: str
    description: str
    published_at: Optional[bool]

app = FastAPI()

@app.get('/')
def index():
    return {'data': {'name': 'TEST'}}

@app.get('/about')
def about():
    return {'data': {'name': 'ABOUT'}}

@app.get('/blog/category')
def category():
    return {'data': 'all category'}

@app.get('/blog/{id}')
def show(id: int):
    return {'data': id}

@app.get('/blog')
def item(limit: int=10, published: bool=True):

    if published:
        return {'data': f'{limit}件'}
    else:
        return {'data': '非公開'}

@app.get('/blog/{id}/comments')
def comments(id: int, limit: Optional[str] = None):
    return {'data': {id, limit, 'comments'}}

@app.post('/blog')
def create_blog(blog: Blog):
    return {'data': blog}
