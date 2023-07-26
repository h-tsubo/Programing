<template>
    <div>
        <h1>GitHub Issueにコメントを投稿</h1>
        <details>
            <summary style = "color:red">Click to see more.</summary>
            <h2>コメントしたいIssueのNumber</h2>
            <input v-model="inputNumber" type="text" size = "3"/>
            <h2>コメントを記入</h2>
            <input v-model="inputComment" type="text" />
            <br>
            <button @click="storeInputValue">コメントを確認</button>
            <p>コメントしたいIssueのNumber: {{ storedNumber }}</p>
            <p>コメント: {{ storedComment }}</p>
            <button @click="postComment">コメントを投稿</button>
            <p v-if = "commited">コメントの投稿が完了しました。</p>
            <p v-else>まだコメントの投稿が完了していません。IssueのNumberが正しいか確認してください。</p>
        </details>
    </div>
  </template>
  
<script setup>
import { ref } from 'vue'
import axios from 'axios'

const inputNumber = ref('') // input欄の値を格納するためのリアクティブ変数
const storedNumber = ref('') // 格納された値を表示するためのリアクティブ変数

const inputComment = ref('') // input欄の値を格納するためのリアクティブ変数
const storedComment = ref('') // 格納された値を表示するためのリアクティブ変数

const commited = ref(false)

const storeInputValue = () => {
  storedNumber.value = inputNumber.value // inputValueの値をstoredValueに格納する
  storedComment.value = inputComment.value // inputValueの値をstoredValueに格納する
}
  
const TOKEN = defineProps(['token'])// GitHubアクセストークンを設定
const request = axios.create({
    baseURL: 'https://api.github.com',
    headers: {
      Authorization: `token ${TOKEN.token}`
    }
})
  
const commentText = ref('') // コメントテキストを格納するリアクティブ変数
  
const postComment = async () => {
    const owner = 'h-tsubo' // リポジトリのオーナー（ユーザー）名に置き換える
    const repo = 'Programing' // リポジトリ名に置き換える
    const issueNumber = storedNumber.value // コメントを投稿するIssue番号に置き換える
  
    try {
      const response = await request.post(`/repos/${owner}/${repo}/issues/${issueNumber}/comments`, {
        body: storedComment.value
      })
      console.log(response.data)
      commited.value = true
    } catch (error) {
      console.error('コメントの投稿中にエラーが発生しました:', error)
    }
}
</script>
  