<template>
    <section class="p-6 bg-gray-300">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My App</h1>

            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-2xl mx-auto ">
            <slot />
        </div>
    </section>
</template>

<script>
import Nav from "./Nav";

export default {
    components: { Nav },
};
</script>
