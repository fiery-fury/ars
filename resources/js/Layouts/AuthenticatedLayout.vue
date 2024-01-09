<script setup lang="js">
import { onMounted } from 'vue'
import SideNav from '@/Components/SideNav.vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
    initFlowbite()
})
</script>

<template>
    <div>
        <SideNav :user-detail="$page.props.auth.user_detail" />
        <slot />
    </div>
</template>
