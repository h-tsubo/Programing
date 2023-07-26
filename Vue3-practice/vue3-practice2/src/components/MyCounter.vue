<script setup>
import {ref} from 'vue'
const props = defineProps({
    init: Number
})

const current = ref(props.init)
const onclick = () => current.value++
const onclick2 = () => {
    current.value = 1
}
</script>
<template>
<p>現在の数字は{{ current }}です。</p>
<button @click = "onclick">+1</button>
<br>
<button @click = "onclick2">元に戻す。</button>
</template>