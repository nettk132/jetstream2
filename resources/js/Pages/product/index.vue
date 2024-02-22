<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import { ref } from 'vue';

defineProps(['products']);

</script>

<template>
    <AppLayout title="product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                product
            </h2>
        </template>

        <div v-for="product in products" :key="product.id">
  <h2>{{ product.name_product }}  {{ product.price }} บาท</h2>

  </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                </div>
            </div>
        </div>
    </AppLayout>
</template>
