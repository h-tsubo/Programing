<script setup>
import {ref} from 'vue'
const message = ref('こんにちは、Vue.js!')
const value = ref(5)
</script>

<template>
<p>{{ message }}</p>
<p>{{ 2 + 3 }}</p>
<p>{{ value + 4 }}</p>
<p>{{ message.substring((2)) }}</p>
<p>{{ Math.abs(-10) }}</p>
</template>