<script setup>
import { defineProps } from "vue";
defineProps({
    id: String,
});
</script>
<template>
    <div>
        <Header logo="logo.png" title="Blog Interia" />
        <div class="flex flex-row justify-center my-5">
            <div class="basis-3/4">
                <article>
                    <h1 class="text-3xl text-center">{{ id }}</h1>
                    <img src="" alt="" />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Possimus et laborum eum, quos iste tenetur similique
                        maiores eligendi magnam ipsum. Reiciendis culpa
                        voluptatem molestias rerum sapiente autem vero
                        asperiores magnam.
                    </p>
                </article>
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
export default {
    name: "Post",
    components: {
        Header,
        Footer,
    },
};
</script>
