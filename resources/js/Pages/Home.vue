<template>
    <Head title="Home"/>

    <h1 class="text-3xl">Code</h1>

    <pre>
        <code ref="code">
            class ClassName
            {
                public function __construct()
                {
                    // code
                }
            }
        </code>
    </pre>
</template>

<script>
import { highlightElement } from "@/Services/SyntaxHighlighting"

export default {
    mounted() {
        highlightElement(this.$refs.code)
    }
}
</script>
