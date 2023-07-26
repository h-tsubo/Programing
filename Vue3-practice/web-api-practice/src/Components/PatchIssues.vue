<template>
    <div>
      <h1>Issueの編集</h1>
      <details>
        <summary style = "color:red">Click to see more.</summary>
        <h2>編集内容を入力してください。</h2>
        <h3>編集したいIssueのNumber</h3>
        <input v-model="inputNumber" type="text" size = "3"/>
        <h3>タイトルを記入</h3>
        <input v-model="inputTitle" type="text" />
        <h3>本文を記入</h3>
        <input v-model="inputBody" type="text" />
        <br>
        <button @click="storeInputValue">編集を確認</button>
        <p>編集したいIssueのNumber: {{ storedNumber }}</p>
        <p>タイトル: {{ storedTitle }}</p>
        <p>本文： {{ storedBody }}</p>
        <h2>GitHub Issueを更新</h2>
        <button @click="updateIssue">Issueを更新する</button>
        <p v-if = "patched">更新が完了しました。</p>
        <p v-else>まだ更新ができていません。Issue Numberが正しいか確認してください。</p>
      </details>
    </div>
  </template>
  
<script setup>
import { ref } from 'vue'
import axios from 'axios'

const inputNumber = ref('') // input欄の値を格納するためのリアクティブ変数
const storedNumber = ref('') // 格納された値を表示するためのリアクティブ変数

const inputTitle = ref('') // input欄の値を格納するためのリアクティブ変数
const storedTitle = ref('') // 格納された値を表示するためのリアクティブ変数

const inputBody = ref('') // input欄の値を格納するためのリアクティブ変数
const storedBody = ref('') // 格納された値を表示するためのリアクティブ変数

const patched = ref(false)

const storeInputValue = () => {
  storedNumber.value = inputNumber.value // inputValueの値をstoredValueに格納する
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
  
const updateIssue = async () => {
  const owner = 'h-tsubo' // リポジトリのオーナー（ユーザー）名に置き換える
  const repo = 'Programing' // リポジトリ名に置き換える
  const issueNumber = storedNumber.value // 更新するIssue番号に置き換える
  
  try {
    const response = await request.patch(`/repos/${owner}/${repo}/issues/${issueNumber}`, {
      title: storedTitle.value,
      assignee: 'h-tsubo', // アサインするユーザーを指定
      body: storedBody.value
    })
    console.log(response.data)
    patched.value = true
  } catch (error) {
    console.error('Issueの更新中にエラーが発生しました:', error)
  }
}
</script>
  