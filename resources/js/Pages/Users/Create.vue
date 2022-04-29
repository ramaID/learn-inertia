<template>
    <Head title="Create User" />

    <h1 class="text-3xl">Create New User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label
                for="name"
                class="block mb-2 uppercase font-bold text-xs-text-gray-700"
            >
                Name
            </label>
            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                required
                v-model="form.name"
            />
        </div>

        <div class="mb-6">
            <label
                for="email"
                class="block mb-2 uppercase font-bold text-xs-text-gray-700"
            >
                Email
            </label>
            <input
                type="email"
                class="border border-gray-400 p-2 w-full"
                name="email"
                id="email"
                required
                v-model="form.email"
            />
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="block mb-2 uppercase font-bold text-xs-text-gray-700"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
                required
                v-model="form.password"
            />
        </div>

        <div class="mb-6">
            <button
                class="
                    bg-blue-400
                    text-white
                    rounded
                    py-2
                    px-4
                    hover:bg-blue-500
                "
            >
                Submit
            </button>
        </div>
    </form>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "@vue/reactivity";

let form = reactive({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    Inertia.post("/users", form);
};
</script>
