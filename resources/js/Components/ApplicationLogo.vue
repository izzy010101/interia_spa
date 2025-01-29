<template>
    <img :src="iconSrc" alt="App Icon" class="w-16 h-16" />
</template>

<script>
export default {
    data() {
        return {
            iconSrc: "/icons/logo.png",
        };
    },
};
</script>

