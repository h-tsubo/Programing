<script setup>
import AppHeader from './components/AppHeader.vue'
import {ref} from 'vue'
import TodoList from './components/TodoList.vue'

const todos = ref([])
const newTodo = ref('')

const  addTodo = () => {
  todos.value.push(newTodo.value)
  newTodo.value = ''
}

const removeTodo = (index) => {
  todos.value.splice(index, 1)
}
</script>

<template>
  <AppHeader color = "blue">My todo!</AppHeader>
  <input type = "text" size = 30 v-model = "newTodo"> 
  <button @click = "addTodo()">追加</button>
  <TodoList :todos = "todos" @removeTodo = "removeTodo" />
</template>