<script setup>
import { defineProps } from "vue";

defineProps({
    articles: Array,
});
</script>

<template>
    <div>
        <Header logo="logo.png" title="Blog Interia" />
        <div class="flex flex-wrap flex-row gap-5">
            <div
                class="basis-1/4 my-2"
                v-for="(article, index) in articles"
                :key="index"
            >
                <Card :post="article" />
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Card from "@/Components/Card.vue";
export default {
    name: "App",
    components: { Header, Footer, Card },
};
</script>
