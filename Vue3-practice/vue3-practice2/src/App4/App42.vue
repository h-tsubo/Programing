<script setup>
import {ref} from 'vue'
const message = ref('<h1>こんにちは</h1><span><a href="http://jp.vuejs.org/">Vue.js!</a></span>')
</script>

<template>
<p v-html="message"></p>
</template>