<template>
  <div>
    <h1>Issue{{issueNumber}}のコメントを表示</h1>
    <details>
      <summary style = "color:red">Click to see more.</summary>
      <input type="number" v-model="issueNumber">
      <p>入力した数字: {{ issueNumber }}</p>
      <button @click="fetchComments">コメントを取得する</button>
      <p v-if="comments.length === 0">コメントがありません</p>
      <ul v-else>
        <li v-for="(comment, index) in comments" :key="index">
          {{ comment.body }}
          <button @click="deleteComment(comment.id)">削除</button>
        </li>
      </ul>
    </details>
  </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import axios from 'axios'

const TOKEN = defineProps(['token'])// GitHubアクセストークンを設定
const owner = 'h-tsubo' // リポジトリのオーナー名に置き換える
const repo = 'Programing' // リポジトリ名に置き換える
const issueNumber = ref() // コメントを取得したいIssueの番号を指定

const request = axios.create({
  baseURL: 'https://api.github.com',
  headers: {
    Authorization: `Bearer ${TOKEN.token}`
  }
})

const comments = ref([])

// issueNumberが変更された時にfetchCommentsを実行する
watch(issueNumber, (newVal, oldVal) => {
  fetchComments(newVal)
})

const fetchComments = async (number) => {
  try {
    const response = await request.get(`/repos/${owner}/${repo}/issues/${number}/comments`)
    comments.value = response.data
  } catch (error) {
    console.error('コメントの取得中にエラーが発生しました:', error)
  }
}

const deleteComment = async (commentId) => {
  try {
    const response = await request.delete(`/repos/${owner}/${repo}/issues/comments/${commentId}`)
    console.log('コメントを削除しました:', response.status)
    comments.value = comments.value.filter((comment) => comment.id !== commentId)
  } catch (error) {
    console.error('コメントの削除中にエラーが発生しました:', error)
  }
}

onMounted(fetchComments)
</script>
