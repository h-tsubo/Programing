<script setup>
import {ref} from 'vue'
const props = defineProps(['step'])

const emit = defineEmits(['increment'])
const onclick = () => emit('increment', Number(props.step))
</script>

<template>
    <input type="button" @click = "onclick" :value = "step"/>
</template>