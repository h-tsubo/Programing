<script setup>
import {ref} from 'vue'
import EventCounter from '../components/EventCounter.vue'

const count = ref(0)

const onincrement = e => count.value += e
</script>

<template>
    <div>現在のカウント：{{ count }}</div>
    <div>
        <EventCounter :step = "1" @increment = "onincrement"/>
        <EventCounter :step = "5" @increment = "onincrement"/>
        <EventCounter :step = "10" @increment = "onincrement"/>
        <EventCounter :step = "-1" @increment = "onincrement"/>
    </div>
</template>