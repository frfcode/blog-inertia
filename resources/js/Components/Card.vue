<script setup>
import { textShortener } from "@/utils/utils";
import { defineProps } from "vue";
const props = defineProps({
    post: Object,
});
</script>

<template>
    <div>
        <a :href="`/post/${props.post.link}`" class="block">
            <div
                class="p-4 bg-gray-300 text-center rounded-lg shadow-lg shadow-slate-600"
            >
                <article>
                    <img
                        src="https://placehold.co/600x400/000/fff"
                        alt="{{ props.post.title }}"
                        class="rounded-lg"
                    />
                    <h3 class="text-2xl my-4">{{ props.post.title }}</h3>
                    <p>{{ textShortener(props.post.content) }}</p>
                </article>
            </div>
        </a>
    </div>
</template>
<script>
export default {
    name: "Card",
};
</script>
