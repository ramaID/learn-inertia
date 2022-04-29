<template>
    <section class="p-6 bg-gray-300">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">My App</h1>

                <p class="text-sm ml-4">Welcome back, {{ username }}</p>
            </div>

            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-2xl mx-auto">
            <iframe
                class="mb-6"
                width="100%"
                seamless
                title="laracasts simplecast"
                src="https://player.simplecast.com/d2501a39-70a6-470f-9cf0-9ba8bddfdea2?dark=false"
            ></iframe>

            <slot />
        </div>
    </section>
</template>

<script>
import Nav from "./Nav";

export default {
    components: { Nav },
    computed: {
        username() {
            return this.$page.props.auth.user.name;
        },
    },
};
</script>
