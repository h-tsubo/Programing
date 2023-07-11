<script setup>
import {ref} from 'vue'
const message = ref('Hellow!')
</script>

<template>
<p v-pre>{{ message }}</p>
<p v-text = "message"></p>
</template>