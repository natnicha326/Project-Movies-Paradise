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

           <div v-for="(genress, index) in genres" :key="index">
<div v-if="genress.genres_id === 1">
<button class="my-2 mx-4 bg-gray-500 hover:bg-red-500 text-white font-bold py-5 px-8 rounded" style="margin-left: 180px; margin-bottom: 20px;">
 {{ genress.genres_name }}
</button>
  <div class="text-white font-bold text-xl mb-1" style="margin-left: 200px;">{{ genress.description }}</div>
</div>
</div>
  </div>



     <div class="container">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <template v-for="(movies, index) in movie" :key="index">
      <div v-if="movies.movie_id === 1 || movies.movie_id === 8 || movies.movie_id === 10 || movies.movie_id === 11" class="movie-card-container">
        <a v-bind:href="'/moviedetail/' + movies.movie_id" target="_self">
          <div class="max-w-sm h-94 rounded overflow-hidden shadow-lg border border-white" style="background-color: rgba(55, 55, 55, 0.751);">
            <img class="w-full h-50 object-cover" :src="movies.poster" alt="Poster">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-white">{{ movies.title.replace('.', '') }}</div>
              <p class="text-gray-700 text-base text-white">
                {{ movies.synopsis.length > 100 ? movies.synopsis.substring(0, 100) + '...' : movies.synopsis }}
              </p>
            </div>
          </div>
        </a>
      </div>
    </template>
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
    display: flex;
padding-top: 30px;
padding-bottom:30px;
    margin-left: 200px;
}

</style>
