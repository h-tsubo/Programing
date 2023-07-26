<script setup>
import {ref} from 'vue'
const emails = ref([])
</script>

<template>
    <form>
        <label for="name">メールアドレス：</label>
        <textarea id="name" cols="30" rows="10" :value = "emails.join(';')" @input = "emails = $event.target.value.split(';')"></textarea>
    </form>
    <ul>
        <li v-for = "email in emails" :key = "email">{{ email }}</li>
    </ul>
</template>