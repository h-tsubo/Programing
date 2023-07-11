<script setup>
import {ref} from 'vue'
const myName = ref('ゲスト')
const gender = ref('不明')
const agree = ref('同意しません。')
const language = ref(['日本語', '英語'])
const subject = ref(['国語', '英語'])
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
            <input type="checkbox" id="agree" v-model="agree" true-value = "同意します。" false-value = "同意しません。"/>
            <p>解答：{{ agree }}</p>
        </div>
        <div>
            <p>話せる言語は？</p>
            <label for="japanese">日本語</label>
            <input type="checkbox" id = "japanese" value = "日本語" v-model="language"/>
            <label for="english">英語</label>
            <input type="checkbox" id = "english" value = "英語" v-model="language"/>
            <label for="german">ドイツ語</label>
            <input type="checkbox" id = "german" value = "ドイツ語" v-model="language"/>
            <p>解答：{{ language }}</p>
        </div>
        <div>
            <p>好きな教科を選んでください！</p>
            <select v-model="subject" multiple size = "5">
                <option value="">好きな教科は？</option>
                <option>国語</option>
                <option>英語</option>
                <option>数学</option>
                <option>理科</option>
                <option>社会</option>
            </select>
            <p>好きな教科：{{ subject }}</p>
        </div>
    </form>
</template>