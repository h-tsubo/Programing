<template>
  <div>
    <h1>GitHub User Data</h1>
    <p v-if="userData">User: {{ userData.login }}</p>
    <p v-if="userData">Name: {{ userData.name }}</p>
    <p v-if="userData">Followers: {{ userData.followers }}</p>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const TOKEN = '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' // 発行した自分のアクセストークンに置き換える

const request = axios.create({
  baseURL: 'https://api.github.com',
  headers: {
    'Authorization': `token ${TOKEN}`
  }
})

const userData = ref(null)

const getUserData = async () => {
  try {
    const response = await request.get('/users/h-tsubo') // 'your_github_username'を自分のGitHubのユーザー名に置き換える
    userData.value = response.data
  } catch (error) {
    console.error('ユーザーデータの取得中にエラーが発生しました:', error)
  }
}
console.log(userData)
onMounted(getUserData)
</script>
