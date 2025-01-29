<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Products from '@/Pages/Products.vue';
import {onMounted} from "vue";


// props to pass to component
const props = defineProps({
    products: Array //arr from backend
});

onMounted(() => {
    console.log('Received products in Dashboard:', props.products);
});
</script>



<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

    <Products :products="products" />
<!--    getting undefined not passing products properly-->
</template>
