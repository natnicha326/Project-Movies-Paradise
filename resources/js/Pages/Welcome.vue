<template>
    <Head title="Welcome" />
    <div class="background">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-black 0 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div v-if="canLogin" class="sm:fixed sm:top-0 sm:end-0 p-6 text-end z-10">
                <Link v-if="$page.props.auth.user" :href="route('movie')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">หน้าหลัก</Link>

                <template v-else>
                    <Link :href="route('login')" class="ms-4 font-semibold text-white hover:text-red-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>

                   <Link v-if="canRegister" :href="route('register')" class="ms-4 font-semibold text-white hover:text-red-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>

                </template>
            </div>

            <img src="https://i.pinimg.com/564x/be/c0/01/bec0012bde2b7633d251eb2b7b94ff67.jpg" alt="Logo">
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<style scoped>
.background {
  background-color: #000000; /* สีดำ */
}
</style>


