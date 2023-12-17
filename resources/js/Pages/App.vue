<script setup>
import { defineProps } from "vue";

defineProps({
    articles: Array,
});
</script>

<template>
    <div>
        <Header logo="#" title="Blog Interia" />
        <div v-for="(article, index) in articles" :key="index">
            <h1>{{ article.title }}</h1>
        </div>
        <Footer />
    </div>
</template>

<script>
import Header from "./Components/Header.vue";
import Footer from "./Components/Footer.vue";
export default {
    name: "App",
    components: { Header, Footer },
};
</script>
