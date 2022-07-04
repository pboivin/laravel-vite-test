<script setup>
import { ref, onMounted } from "vue";

const isReady = ref(false);

const count = ref(0);

function increment() {
    count.value++;
}

onMounted(() => {
    setTimeout(() => (isReady.value = true), 2000);
});
</script>

<template>
    <div v-if="!isReady">Loading...</div>
    <div v-else>
        <button @click="increment">Count is: {{ count }}</button>
    </div>
</template>
