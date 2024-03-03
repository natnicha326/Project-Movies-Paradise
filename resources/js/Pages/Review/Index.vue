<script setup>
import { useRouter } from 'vue-router';
import AppLayout from '@/Layouts/AppLayout.vue';
import { defineProps, ref } from 'vue';
import axios from 'axios';
const router = useRouter();


</script>

<script>
export default {
  props: {
    movie: Array,
    review: Array,
    user:Array
  },


data() {
    return {
      reviewText: '',
    };
  },
  methods: {
    reserveTable() {
      axios.post('/review', {
        movie_name: this.selectedmovie,
        feedback: this.reviewText
      })
      .then(response => {
        console.log(response.data);
        alert('ส่งรีวิวเรียบร้อยแล้ว');

      })
      .catch(error => {
        console.error(error);

      });
    }

  }

};
</script>

<template>
  <AppLayout>
    <template #header>
      <h2 class="text-3xl text-white leading-tight">Review</h2>
    </template>
    <div class="container max-lg">

      <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <label for="movie-select">เลือกภาพยนต์</label>
        <select v-model="selectedmovie" id="movie-select">
          <option v-for="(movie, index) in movie" :key="index" :value="movie.title">
            {{ movie.title }}
          </option>
        </select>

        <div id="review_form">
          <input type="text" v-model="reviewText" placeholder="บอกความรู้สึกของคุณ">
          <button class="main-button" @click="reserveTable">ส่งรีวิว</button>
        </div>
      </div>
 </div>
ิ
  <div class="px-6 py-4 text-center">
  <template v-for="(review, index) in review" :key="index">
    <div class="text-white font-bold text-xl mb-2">{{ review.movie_name }}</div>
    <p class="text-white text-base">
      {{ review.feedback }}
    </p>
    <br>
  </template>
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
padding-bottom: 50px;

}

.main-button {
        padding: 10px 20px;
        background-color: #ff0909;
        color: #fff7f7;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
    }


</style>
