<script setup lang="js">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router } from "@inertiajs/vue3";

const props = defineProps({
    data: Object
})

const submitDetails = () => {
    router.post(route('assets.store', {
        data: props.data
    }))
}
</script>

<template>
    <Head title="Confirm Details" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Confirm Details
            </h2>
        </template>

        <div class="p-4 sm:ml-64 text-white">
            <div class="ms-1 text-2xl">Confirm Details</div>
        </div>
        <div class="p-4 sm:ml-64">
            <div
                class="grid gap-6 mb-6 md:grid-cols-6 p-4 border border-gray-700 rounded-lg"
            >
                <div class="col-span-2">
                    <label
                        for="first_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >First name</label
                    >
                    <input
                        type="text"
                        id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="First name"
                        v-model="$page.props.auth.user_detail.first_name"
                        disabled
                    />
                </div>
                <div class="col-span-2">
                    <label
                        for="middle_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Middle name</label
                    >
                    <input
                        type="text"
                        id="middle_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Middle name"
                        v-model="$page.props.auth.user_detail.middle_name"
                        disabled
                    />
                </div>
                <div class="col-span-2">
                    <label
                        for="last_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Last name</label
                    >
                    <input
                        type="text"
                        id="last_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Last name"
                        v-model="$page.props.auth.user_detail.last_name"
                        disabled
                    />
                </div>
            </div>
            <div class="mb-8 text-white">
                <div class="ms-1 text-2xl">Asset(s) to Borrow</div>
            </div>
            <div class="relative overflow-x-auto rounded-lg">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="px-6 py-3">Product name</th>
                            <th scope="col" class="px-6 py-3">
                                Owner Department
                            </th>
                            <th scope="col" class="px-6 py-3">Color</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            v-for="d in data"
                        >
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                                {{ d.name }}
                            </th>
                            <td class="px-6 py-4">{{ d.department.code }}</td>
                            <td class="px-6 py-4">{{ d.color.name }}</td>
                            <td class="px-6 py-4">{{ d.category.name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 text-white flex justify-end">
                <button
                    type="button"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    @click="router.visit(route('assets'))"
                >
                    Cancel
                </button>
                <button
                    type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 ms-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    @click="submitDetails()"
                >
                    Submit
                </button>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
