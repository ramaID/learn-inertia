<template>
    <Head title="Home" />

    <h1 class="text-3xl">Code</h1>

    <Highlight :code="snippet" />
</template>

<script setup>
import Highlight from '@/Components/Highlights.vue'

let snippet = `
class ClassName
{
    public function __construct()
    {
        // code
    }
}
`.trim()
</script>
