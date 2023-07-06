<script setup>
defineProps(['todos'])
const emit = defineEmits(['removeTodo'])

const clickRemove = (i) => emit('removeTodo', i)
</script>

<template>
  <ul v-if = "todos.length > 0">
    <li v-for = "(todo, i) in todos" v-bind:key = "i">{{ todo }} <button @click = "clickRemove(i)" style = "cursor:pointer;">x</button></li>
  </ul>
  <p v-else>※ Todoを追加してください。</p>
</template>