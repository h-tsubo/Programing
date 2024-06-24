<template>
    <GetIssues :token = "token"></GetIssues>
    <PostIssues :token = "token"></PostIssues>
    <PatchIssues :token = "token"></PatchIssues>
    <GetAndDeleteComment :token = "token"></GetAndDeleteComment>
    <CommitComment :token = "token"></CommitComment>
</template>

<script setup>
import GetIssues from './Components/GetIssues.vue'
import PostIssues from './Components/PostIssues.vue'
import PatchIssues from './Components/PatchIssues.vue'
import GetAndDeleteComment from './Components/GetAndDeleteComment.vue'
import CommitComment from './Components/CommitComment.vue'

const token = 'My GitHub Token'
</script>