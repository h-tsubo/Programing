<script setup>
import {ref,reactive} from 'vue'
const message = ref('こんにちは、Vue.js!')
const color = reactive({
    'background-color': 'Yellow',
    'color': 'Red'
})
const big = reactive({
    'font-size': '30px',
    'width': '500px'
})
</script>

<template>
<div :style = "[color, big]" v-cloak>{{ message }}</div>
</template>

<style scoped>
[v-cloak]{
    display:none;
}
</style>