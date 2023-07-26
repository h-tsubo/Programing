<template>
    <div>
      <h1>GitHub Issues</h1>
      <table border="1" style="border-collapse: collapse">
        <th>番号</th><th>投稿日</th><th>更新日</th><th>タイトル</th><th>本文</th>
        <tr v-for="issue in issues" :key="issue.id">
          <td><a :href="getIssueUrl(issue.number)">{{ issue.number }}</a></td>
          <td>{{ formatDate(issue.created_at) }}</td>
          <td>{{ formatDate(issue.updated_at) }}</td>
          <td>{{ issue.title }}</td>
          <td>{{ issue.body }}</td>
        </tr>
      </table>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted, watch } from 'vue'
  import axios from 'axios'

  const TOKEN = defineProps(['token'])
  
  const request = axios.create({
    baseURL: 'https://api.github.com',
    headers: {
    'Authorization': `token ${TOKEN.token}`
  }
  })
  
  const issues = ref(null)
  
  const fetchIssues = async () => {
  try {
    const response = await request.get(`/repos/h-tsubo/Programing/issues`)
    issues.value = response.data
  } catch (error) {
    console.error('Issueリストの取得中にエラーが発生しました:', error)
  }
}

onMounted(() => {
  fetchIssues()
  setInterval(fetchIssues, 1000) // 1秒ごとにデータを更新
})

const getIssueUrl = (issueNumber) => {
  return `https://github.com/h-tsubo/Programing/issues/${issueNumber}`
}
  console.log(issues)
  
const formatDate = (dateString) => {
  const date = new Date(dateString);
  const year = date.getFullYear();
  const month = date.getMonth() + 1;
  const day = date.getDate();
  return `${year}年${month}月${day}日`;
};
  </script>