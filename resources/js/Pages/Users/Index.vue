<template>
    <Head title="Users" />

    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1 class="text-3xl">Users</h1>

            <Link href="/users/create" class="text-blue-500 text-sm ml-3">
                New User
            </Link>
        </div>

        <input
            v-model="search"
            type="text"
            placeholder="Search ..."
            class="border px-2 rounded-lg"
        />
    </div>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
                class="
                    py-2
                    align-middle
                    inline-block
                    min-w-full
                    sm:px-6
                    lg:px-8
                "
            >
                <div
                    class="
                        shadow
                        overflow-hidden
                        border-b border-gray-200
                        sm:rounded-lg
                    "
                >
                    <table
                        class="min-w-full divide-y divide-gray-200"
                        aria-hidden="true"
                    >
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="user in users.data" :key="user.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div
                                            class="
                                                text-sm
                                                font-medium
                                                text-gray-900
                                            "
                                        >
                                            {{ user.name }}
                                        </div>
                                    </div>
                                </td>

                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-right text-sm
                                        font-medium
                                    "
                                >
                                    <Link
                                        class="
                                            text-indigo-600
                                            hover:text-indigo-900
                                        "
                                        :href="`/users/${user.id}/edit`"
                                    >
                                        Edit
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- paginator -->
    <Pagination :links="users.links" class="mt-6" />
</template>

<script setup>
import { ref } from "@vue/reactivity";
import { watch } from "@vue/runtime-core";
import Pagination from "../../Shared/Pagination.vue";
import { Inertia } from "@inertiajs/inertia";
import debounce from "lodash/debounce";

let props = defineProps({
    users: Object,
    search: String,
});

let search = ref(props.search);

watch(
    search,
    debounce(function (value) {
        console.log('triggered');
        Inertia.get(
            "/users",
            { search: value },
            { preserveState: true, replace: true }
        );
    }, 300)
);
</script>
