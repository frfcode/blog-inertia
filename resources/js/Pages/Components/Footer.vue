<script setup>
import { onMounted } from "vue";

const getYear = () => {
    const date = new Date();
    return date.getFullYear();
};

onMounted(() => {
    getYear();
});
</script>

<template>
    <footer>
        <div class="bg-black">
            <p class="p-4 text-white text-center">
                &copy; {{ getYear() }} Blog Interia
            </p>
        </div>
    </footer>
</template>
<script>
export default {
    name: "Footer",
};
</script>
