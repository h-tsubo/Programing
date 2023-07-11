<script setup>
import {ref} from 'vue'
const name = ref('ゲスト')

const clear = () => {
    name.value = ''
}

const help = () => {
    window.alert('20文字以内で入力ください。')
} 
</script>

<template>
    <form>
        <label for="name">氏名：</label>
        <input type="text" id = "name" @keyup.escape = "clear" @keyup.alt.enter.prevent = "help" v-model = "name"/>
    </form>
</template>