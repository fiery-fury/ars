<script setup lang="js">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router } from "@inertiajs/vue3";
import { ref } from 'vue';

defineProps({
    data: Object
})

const selectedAssets = ref([])
const available = true

const borrowSelectedAssets = () => {
    if(selectedAssets.value.length > 0) {
        router.visit(route('assets.input_details'), {
            method: 'post',
            data: {
                assets: selectedAssets.value
            }
        })
    }
}
</script>

<template>
    <Head title="Borrow Asset(s)" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Borrow Asset(s)
            </h2>
        </template>

        <div class="p-4 sm:ml-64 text-white">
            <div class="ms-1 text-2xl">Borrow Asset(s)</div>
        </div>
        <div class="flex flex-row sm:ml-64 text-white">
            <div class="ms-4">
                <button
                    type="button"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm p-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    @click="borrowSelectedAssets"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                        />
                    </svg>
                </button>
            </div>
        </div>
        <div class="p-4 sm:ml-64">
            <div class="relative overflow-x-auto rounded-lg">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="p-4 text-center">
                                <div class="flex items-center">&nbsp;</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Owner Department
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            v-for="d in data"
                        >
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input
                                        :id="'cbx-' + d.id"
                                        type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        v-model="selectedAssets"
                                        :value="d.id"
                                    />
                                    <label :for="'cbx-' + d.id" class="sr-only"
                                        >checkbox</label
                                    >
                                </div>
                            </td>
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                                {{ d.name }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ d.department.code }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ d.color.name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ d.category.name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span
                                    class="text-white bg-green-700 rounded-full text-xs px-4 py-2 text-center dark:bg-green-600"
                                    v-if="available"
                                    >Available</span
                                >
                                <span
                                    class="text-white bg-red-700 rounded-full text-xs px-4 py-2 text-center dark:bg-red-600"
                                    v-else
                                    >Unvailable</span
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
