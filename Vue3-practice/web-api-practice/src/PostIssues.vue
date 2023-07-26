<template>
   <h1>Issueを作成</h1>
  <details>
    <summary style = "color:red">Click twitter see more.</summary>
    <div>
      <h2>作成したいIssueを入力してください。</h2>
      <h3>タイトルを記入</h3>
      <input v-model="inputTitle" type="text" />
      <h3>本文を記入</h3>
      <input v-model="inputBody" type="text" />
      <br>
      <button @click="storeInputValue">値を格納する</button>
      <p>タイトル: {{ storedTitle }}</p>
      <p>本文： {{ storedBody }}</p>
    </div>
    <div>
      <h2>GitHub Issueを作成</h2>
      <button @click="createIssue">Issueを作成する</button>
      <p v-if = "posted">投稿が完了しました。</p>
      <p v-else>まだ投稿できていません。</p>

    </div>
  </details>
  </template>
  
<script setup>
import { ref } from 'vue'
import axios from 'axios'

const inputTitle = ref('') // input欄の値を格納するためのリアクティブ変数
const storedTitle = ref('') // 格納された値を表示するためのリアクティブ変数
const inputBody = ref('') // input欄の値を格納するためのリアクティブ変数
const storedBody = ref('') // 格納された値を表示するためのリアクティブ変数

const posted = ref(false)


const storeInputValue = () => {
  storedTitle.value = inputTitle.value // inputValueの値をstoredValueに格納する
  storedBody.value = inputBody.value // inputValueの値をstoredValueに格納する
}
  
const TOKEN = defineProps(['token'])
const request = axios.create({
  baseURL: 'https://api.github.com',
  headers: {
    Authorization: `token ${TOKEN.token}`
  }
})
  
const createIssue = async () => {
  const owner = 'h-tsubo' // リポジトリのオーナー（ユーザー）名に置き換える
  const repo = 'Programing' // リポジトリ名に置き換える
  
  try {
    const response = await request.post(`/repos/${owner}/${repo}/issues`, {
      title: storedTitle.value,
      body: storedBody.value
    })
    console.log(response.data)
    posted.value = true
  } catch (error) {
    console.error('Issueの作成中にエラーが発生しました:', error)
  }
}
</script>