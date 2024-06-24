<script setup>
import MyHellowMulti from '../components/MyHellowMulti.vue'
</script>

<template>
    <MyHellowMulti>
        <template #header>
            <h3>ようこそ速習Vue.jsへ</h3>
        </template>
        <p>一緒に勉強しましょう。</p>
        <template #footer>
            <a href="#">Q&A掲示板</a>
        </template>
        <p>質問は掲示板へどうぞ</p>
    </MyHellowMulti>
</template>