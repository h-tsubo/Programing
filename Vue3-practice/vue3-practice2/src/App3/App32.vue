<script setup>
import {ref, reactive, computed} from 'vue'
const current = ref(new Date().toLocaleTimeString())
setInterval(() => {
    current.value = new Date().toLocaleTimeString()
}, 1000)
const data = reactive({
    current: new Date().toLocaleTimeString()
})
setInterval(() => {
    data.current = new Date().toLocaleTimeString()
}, 1000)

const randomc = computed(() => Math.random())
const randomm = () => Math.random()
</script>
<template>
<p>{{ current }}</p>
<p>{{ data.current }}</p>
<p>算出プロパティー：{{ randomc }}</p>
<p>メソッド：{{ randomm() }}</p>
</template>