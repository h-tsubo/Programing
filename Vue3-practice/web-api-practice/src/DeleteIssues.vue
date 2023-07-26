<template>
    <div>
        <h1>Issueを削除</h1>
        <h2>削除したIssueのNumber</h2>
        <input v-model="inputNumber" type="text" size = "3"/>
        <br>
        <button @click="storeInputValue">削除するIssueを確認</button>
        <p>削除したIssueのNumber: {{ storedNumber }}</p>
        <p>Issueのtitle: {{ deletingIssue.title }}</p>
        <p>Issueの本文: {{ deletingIssue.body }}</p>
        <h1>GitHub Issueを削除</h1>
        <button @click="deleteIssue">Issueを削除する</button>
        <p v-if = "deleted">削除が完了しました</p>
        <p v-else>まだ削除できていません。</p>
    </div>
</template>
  
<script setup>
import { ref } from 'vue'
import axios from 'axios'
const token = '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' // GitHubアクセストークンを設定
  const request = axios.create({
    baseURL: 'https://api.github.com',
    headers: {
      Authorization: `token ${token}`
    }
})
const owner = 'h-tsubo' // リポジトリのオーナー（ユーザー）名に置き換える
const repo = 'Programing' // リポジトリ名に置き換える

const inputNumber = ref('') // input欄の値を格納するためのリアクティブ変数
const storedNumber = ref('') // 格納された値を表示するためのリアクティブ変数
const deletingIssue = ref('') // 削除したいIssueのデータを格納する
const deleted = ref(false)

const storeInputValue = async () => {
  storedNumber.value = inputNumber.value // inputValueの値をstoredValueに格納する
  await getIssueData()
  console.log(storedNumber.value)
}

const getIssueData = async () => {
  try {
    const response = await request.get(`/repos/${owner}/${repo}/issues/${storedNumber.value}`)
    deletingIssue.value = response.data
  } catch (error) {
    console.error('Issueの取得中にエラーが発生しました:', error)
    deletingIssue.value = null
  }
}


  
const deleteIssue = async () => {
  
    try {
      const response = await request.delete(`/repos/${owner}/${repo}/issues/${storedNumber.value}`)
      console.log('Issueを削除しました:', response.status)
      deletingIssue.value = null
      deleted.value = true
    } catch (error) {
      console.error('Issueの削除中にエラーが発生しました:', error)
    }
}
</script>