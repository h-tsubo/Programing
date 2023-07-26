<template>
    <GetIssues :token = "token"></GetIssues>
    <PostIssues :token = "token"></PostIssues>
    <PatchIssues :token = "token"></PatchIssues>
    <GetAndDeleteComment :token = "token"></GetAndDeleteComment>
    <CommitComment :token = "token"></CommitComment>
</template>

<script setup>
import GetIssues from './GetIssues.vue'
import PostIssues from './PostIssues.vue'
import PatchIssues from './PatchIssues.vue'
import GetAndDeleteComment from './GetAndDeleteComment.vue'
import CommitComment from './CommitComment.vue'

const token = 'My GitHub Token'
</script>