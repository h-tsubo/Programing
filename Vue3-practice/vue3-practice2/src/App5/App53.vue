<script setup>
import {ref} from 'vue'
const message = ref('')
const onclick = () => {
    message.value = new Date().toLocaleTimeString()
}
</script>

<template>
<button @click.once="onclick()">現在時刻</button>
<p>{{ message }}</p>
</template>