<template>
    <pre><code ref="block">{{ code }}</code></pre>
</template>

<script setup>
import { highlightElement } from '@/Services/SyntaxHighlighting'
import { onMounted, ref } from 'vue'

defineProps({
    code: String,
})

let block = ref(null)

onMounted(() => {
    highlightElement(block.value)
})
</script>
