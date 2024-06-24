<script setup>
import {ref, reactive, computed} from 'vue'
const persons = ref([{
    id: 1,
    height: 168,
    weight: 55,
    legHeight: 77
},
{
    id: 2,
    height: 180,
    weight: 70,
    legHeight: 100
},
{
    id: 3,
    height: 155,
    weight: 50,
    legHeight: 70
},

{
    id:4,
    height: 160,
    weight: 70,
    legHeight:66
},

{
    id:5,
    height: 175,
    weight:100,
    legHeight:75
}
])

const fatPersons = computed(() => {
    return persons.value.filter(b => b.weight/((b.height/100) * (b.height/100)) > 23)
})

const member = reactive({
    name: '山田太郎',
    age: 30,
    mail: 'yamada@example.com'
})
</script>

<template>
    <p>テスト</p>
    <table border="1">
        <th>番号</th><th>身長</th><th>体重</th><th>座高</th>
        <tr v-for = "person in persons" :key = "person.id">
            <td>{{ person.id }}番</td>
            <td>{{ person.height }}cm</td>
            <td>{{ person.weight }}kg</td>
            <td>{{ person.legHeight }}cm</td>
        </tr>
    </table>
    <br>
    <h1>太った人だけを抽出します！</h1>
    <table border="1">
        <th>番号</th><th>身長</th><th>体重</th><th>座高</th>
        <tr v-for = "fat in fatPersons" :key = "fat.id">
            <td>{{ fat.id }}番</td>
            <td>{{ fat.height }}cm</td>
            <td>{{ fat.weight }}kg</td>
            <td>{{ fat.legHeight }}cm</td>
        </tr>
    </table>
    <br>
    <ul>
        <li v-for="(value, key, i) in member" :key = "key">
            {{ i + 1 }}.{{ key }} : {{ value }}
        </li>
    </ul>
</template>