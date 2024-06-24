<script setup>
import {ref} from 'vue'
const time = ref(0)
const onchange = () => {
    console.log(time.value.toFixed(2))
}

const message = ref('')
const onchangeMessage = () => {
    console.log(`入力値は「${message.value}」です。`)
}

const myName = ref('ゲスト')
</script>

<template>
<form>
    <div>
        <label for="time">50m走タイム：</label>
        <input type="text" id = "time" v-model.number="time" @change = "onchange"/>
    </div>
    <div>
        <label for="message">メッセージ：</label>
        <input type="text" id = "message" v-model.trim = "message" @change = "onchangeMessage"/>
    </div>
    <div>
        <label for="name">氏名：</label>
        <input type="text" id = "name" v-model.lazy = "myName"/>
        <p>こんにちは、{{ myName }}さん！</p>
    </div>
</form>
</template>