<script setup>
const props = defineProps({
    products: {
        type: Array,
        default: () => []  // Fallback to an empty array if no products
    }
});

// console.log(props.products); // Log the data to check if it's being passed
</script>

<template>
    <div v-if="props.products.length > 0">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in props.products" :key="product.id">
                <td>{{ product.id }}</td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.created_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div v-else>
        <p>No products available</p>
    </div>
</template>
