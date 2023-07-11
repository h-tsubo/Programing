<script setup>
const onclick = (message, e) =>{
    console.log(message)
    console.log(e)
}
</script>

<template>
    <button @click = "onclick('こんにちは', $event)">クリック</button>
</template>