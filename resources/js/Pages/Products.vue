<template>
    <div>
        <h2>Products</h2>
        <table class="min-w-full table-auto ">
            <thead>
            <tr>
                <th class="px-4 py-2 text-left">Product ID</th>
                <th class="px-4 py-2 text-left">Product Name</th>
                <th class="px-4 py-2 text-left">Description</th>
                <th class="px-4 py-2 text-left">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id">
                <td class="px-4 py-2">{{ product.id }}</td>
                <td class="px-4 py-2">{{ product.name }}</td>
                <td class="px-4 py-2">{{ product.description }}</td>
                <td class="px-4 py-2">{{ product.price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    products: {
        type: Array,
        required: true
    }
});

console.log("Received Products:", props.products);
</script>
