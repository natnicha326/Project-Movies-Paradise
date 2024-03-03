<script setup>
import { defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps(['booking']);
</script>

<template>
  <AppLayout>
    <template #header>
      <h1 class="text-3xl text-white leading-tight">
        Booking
      </h1>
    </template>
    <div class="container">
  <div v-for="(bookings, index) in booking" :key="index">
    <a v-bind:href="bookings.web" target="_self">
  <div v-if="bookings.cinema_id === 1 || bookings.cinema_id === 2" class="movie-card-container">
    <div class="movie-card">
      <img :src="bookings.logo" alt="logo">
      <div class="card-content">
        <h2>{{ bookings.cinema_name }}</h2>
      </div>
      </div>
    </div>
      </a>
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
  margin-top: 20px;
  margin-bottom: 50px;
}

.container{
    display: flex;
}
.movie-card-container {

    padding-bottom: 50px;
    padding-left: 250px;
}

.movie-card {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 20px;
  padding: 20px;
  width: 100%;
  max-width: 440px;
 


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
margin-top: 20px;
margin-bottom: 10px;
  font-weight: 400;
}

.card-content h2 {
  font-size: 24px;


}

.card-content p {
  font-size: 16px;
}

</style>
