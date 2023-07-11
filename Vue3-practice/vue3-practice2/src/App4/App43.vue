<script setup>
import {ref} from 'vue'
const url = ref('http://jp.vuejs.org/')
</script>

<template>
<a :href="url">サポートサイト</a>
</template>