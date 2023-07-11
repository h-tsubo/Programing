<script setup>
import {ref} from 'vue'
const message = ref('')
const onclick = () => {
    message.value = new Date().toLocaleString()
}
</script>

<template>
<button @click="onclick()">クリック</button>
<p>{{ message }}</p>
</template>