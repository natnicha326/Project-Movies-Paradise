<script setup>
import { useRouter } from 'vue-router';
import AppLayout from '@/Layouts/AppLayout.vue';
const router = useRouter();
</script>

<script>
export default {
  props: {
    genres: Array,
    movie: Array
  }
};
</script>


<template>
    <AppLayout>
      <template #header>
        <h2 class="text-3xl text-white leading-tight">Genres</h2>
      </template>
      <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
           <div v-for="(genress, index) in genres" :key="index">
 <a v-bind:href="'/genresdetail/' + genress.genres_id" target="_self">
<button class="my-2 mx-4 bg-gray-500 hover:bg-red-500 text-white font-bold py-5 px-8 rounded" style="font-size: 15px;">
 {{ genress.genres_name }}
</button>
  </a>
</div>
</div>
      </div>
   </AppLayout>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Itim&family=Kodchasan:ital,wght@1,600&family=Mali&family=Mooli&family=Nunito:wght@500&family=Roboto+Slab&family=Sriracha&display=swap');

h2 {
  font-family: "Anton", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.container {
    display: flex;
padding-top: 50px;
    margin-left: 200px;
}

</style>
