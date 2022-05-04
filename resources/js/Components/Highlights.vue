<template>
    <div>
        <header
            v-if="supported"
            class="bg-gray-800 text-white flex justify-end px-2 py-1 text-xs border-b border-gray-700"
        >
            <button
                type="button"
                class="hover:bg-gray-600 rounded px-2"
                @click="copy"
            >
                {{ copied ? 'Copied' : 'Copy' }}
            </button>
        </header>
        <pre><code ref="block">{{ code }}</code></pre>
    </div>
</template>

<script setup>
import { highlightElement } from '@/Services/SyntaxHighlighting'
import { onMounted, ref } from 'vue'
import { useClipboard } from '@/Composables/useClipboard'

let props = defineProps({
    code: String,
})

let block = ref(null)

let { copy, copied, supported } = useClipboard(props.code)

onMounted(() => {
    highlightElement(block.value)
})
</script>
