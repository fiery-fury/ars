<script setup lang="js">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    data: Object
})
</script>

<template>
    <Head title="View Request Details" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                View Request Details
            </h2>
        </template>

        <div class="p-4 sm:ml-64 text-white">
            <div class="ms-1 text-2xl">View Request Details</div>
        </div>
        <div class="p-4 sm:ml-64 flex justify-center">
            <div class="bg-white p-2" style="width: 1280px">
                <div
                    class="grid grid-cols-2 border-l border-r border-t border-black"
                >
                    <!-- ROW 1 -->
                    <div class="border-r border-black px-2 py-1 font-bold">
                        Date:
                    </div>
                    <div class="px-2 py-1">
                        {{ data.created_at.split("T")[0] }}
                    </div>

                    <!-- ROW 2 -->
                    <div
                        class="border-r border-t border-black px-2 py-1 font-bold"
                    >
                        Requested by:
                    </div>
                    <div class="border-t border-black px-2 py-1">
                        {{
                            data.requestor.first_name +
                            " " +
                            data.requestor.last_name
                        }}
                    </div>
                </div>
                <div class="grid grid-cols-4 border-x border-black">
                    <!-- ROW 3 -->
                    <div
                        class="border-r border-t border-black px-2 py-1 col-span-4 text-center font-bold bg-yellow-200"
                    >
                        Requested Assets
                    </div>
                    <div class="border-y border-black px-2 py-1 col-span-4">
                        {{ data.assets[0].name }}
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 sm:ml-64 flex justify-center">
            <button
                type="button"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            >
                Approve
            </button>
            <button
                type="button"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 ms-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
            >
                Deny
            </button>
        </div>
    </AuthenticatedLayout>
</template>
