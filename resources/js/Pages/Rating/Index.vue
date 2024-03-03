<script setup>
import { useRouter } from 'vue-router';
import AppLayout from '@/Layouts/AppLayout.vue';
import { defineProps } from 'vue';
const router = useRouter();
</script>

<script>


export default {
  props: {
    movie:Array,
    rating:Array
  }
};
</script>

<template>
  <AppLayout>
    <template #header>
      <h2 class="text-3xl text-white leading-tight">Rating</h2>
    </template>
    <div class="container max-lg">

      <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div v-for="(ratings, index) in rating" :key="index">
            <div class="max-w-sm h-94 rounded overflow-hidden shadow-lg border border-white" style="background-color: rgba(55, 55, 55, 0.751);">
                <img class="w-full h-50 object-cover" :src="ratings.rating_poster" alt="Poster">
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-white">{{ ratings.rating_name.replace('.', '') }}</div>
                <div class="font-bold text-xl mb-2 text-white">{{ ratings.rating_for }}</div>
              </div>
            </div>
        </div>
      </div>
      </div>

  </AppLayout>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Itim&family=Kodchasan:ital,wght@1,600&family=Mali&family=Mooli&family=Nunito:wght@500&family=Roboto+Slab&family=Sriracha&display=swap');

h2 {
  font-family: "Anton", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.container {
align-items: center;
justify-items: center;
margin-bottom: 45px;

}
</style>
