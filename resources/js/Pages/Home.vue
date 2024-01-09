<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Home
            </h2>
        </template>

        <div class="p-4 sm:ml-64">
            <div
                class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"
            ></div>
        </div>
    </AuthenticatedLayout>
</template>
