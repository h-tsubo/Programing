<script setup>
import {ref} from 'vue'
const msg = ref('')

const onclick = e => {
    msg.value = `右クリックした座標：\n（${e.clientX}, ${e.clientY}）`
}
</script>

<template>
    <div id = "main" @click.right.prevent="onclick">
        {{ msg }}
    </div>
</template>

<style scoped>
#main {
    border: 1px solid black;
    width: 200px;
    height: 100px;
}
</style>