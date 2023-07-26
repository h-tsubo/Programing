<script setup>
import {ref} from 'vue'
const toggle = ref(false)
const favorite = ref('')
</script>

<template>
    <form>
        <label for="show">表示・非表示</label>
        <input type="checkbox" id = "show" v-model="toggle">
    </form>
    <div id="pannel" v-if="toggle">
        <p>好きなメニューを選んでください。</p>
        <form>
            <select v-model="favorite">
                <option value="">好きな食べ物を選んでください。</option>
                <option value="ramen">ラーメン</option>
                <option value="udon">うどん</option>
                <option value="soba">そば</option>
            </select>
        </form>
        <div v-if="favorite === 'ramen'">あなたはラーメンを選びました。</div>
        <div v-else-if="favorite === 'udon'">あなたはうどんを選びました。</div>
        <div v-else-if="favorite === 'soba'">あなたはそばを選びました。</div>
        <div v-else>あなたはまだ好きな食べ物を選んでいません。</div>
    </div>
    <div v-else = "toggle">現在は何も表示されていません。</div>
</template>

<style scoped>
#pannel {
    border: 1px solid black;
    width: 300px;
    height: 100px;

}
</style>