<script setup>
import {ref} from 'vue'
const myName = ref('ゲスト')
const gender = ref('不明')
const agree = ref(true)
</script>

<template>
    <form>
        <div>
            <p>名前を入力してください。</p>
            <label for="name">氏名：</label>
            <input type="text" id = "name"  v-model = "myName"/>

            <p>こんにちは{{ myName }}さん！</p>
        </div>
        <div>
            <p>あなたの性別は？</p>
            <label for="man">男性</label>
            <input type="radio" id="man" value="男性" v-model="gender">
            <br>
            <label for="man">女性</label>
            <input type="radio" id="woman" value="女性" v-model="gender">
            <br>
            <label for="man">その他</label>
            <input type="radio" id="other" value="その他" v-model="gender">
            <br>
            <p>性別：{{ gender }}</p>
        </div>
        <div>
            <p>上記の内容に同意しますか？</p>
            <label for="agree">同意する：</label>
            <input type="checkbox" id="agree" v-model="agree" true-value = "同意します。" fale-value = "同意しません。"/>
            <p>解答：{{ agree }}</p>
        </div>
    </form>
</template>