<script setup>
import { defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps(['movie']);
</script>

<template>
  <AppLayout>
    <template #header>
      <h1 class="text-3xl text-white leading-tight">
        Movie Detail
      </h1>
    </template>
    <div v-for="(movies, index) in movie" :key="index">
  <div v-if="movies.movie_id === 1" class="movie-card-container">
    <div class="movie-card">
      <img :src="movies.poster" alt="Poster">
      <div class="card-content">
        <h2>{{ movies.title }}</h2>
        <p>
          <b>เรื่องย่อ</b><br>
          {{ movies.synopsis }}
          <br><br>
          <b>ประเภท</b><br>
          {{ movies.genres }}
          <br><br>
          <b>ความยาว</b><br>
          {{ movies.duration }}
          <br><br>
          <b>ผู้กำกับ</b><br>
          {{ movies.director }}
          <br><br>
          <b>นักแสดง</b><br>
          {{ movies.cast }}
          <br><br>
          <b>ตัวอย่างภาพยนต์</b><br>
          <a v-bind:href="movies.trailer" target="_blank">ดูตัวอย่าง🔴</a>
        </p>
      </div>
      </div>
    </div>
    </div>
  </AppLayout>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Itim&family=Kodchasan:ital,wght@1,600&family=Mali&family=Mooli&family=Nunito:wght@500&family=Roboto+Slab&family=Sriracha&display=swap');

h1 {
  font-family: "Anton", sans-serif;
  font-weight: 500;
  font-style: normal;

}

.movie-card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin-top: 50px;
}

.movie-card {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 20px;
  padding: 20px;
  width: 80%;
  max-width: 800px;
  margin-top:100px ;

}
.movie-card img {
  max-width: 100%;
  border-radius: 20px;
  border: none;
  padding-left: 0;
  padding-right: 0;
}


.card-content {
font-family: "Anton", sans-serif;
  margin-left: 20px;
margin-top: 30px;
  font-weight: 400;
margin-bottom: 20px;}

.card-content h2 {
  font-size: 24px;
  margin-bottom: 10px;

}

.card-content p {
  font-size: 16px;
}

</style>
