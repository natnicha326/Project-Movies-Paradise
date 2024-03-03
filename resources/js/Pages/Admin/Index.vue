<script setup>
import { defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import axios from 'axios';

</script>
<script>
export default {
  props: {
    admin: Array,
    report: Array,
  },

  methods: {
    onFileChange(e) {
      this.image = e.target.files[0];
    },
    async uploadImage() {
      let formData = new FormData();
formData.append('image', this.image);

try {
    await axios.post('/api/upload', formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    });
    alert('อัปโหลดรูปภาพเรียบร้อย');
} catch (error) {
    alert('เกิดข้อผิดพลาดในการอัปโหลดรูปภาพ');
}

    }
  },
  data() {
    return {
      image: null
    };
  }
};

</script>

<template>
  <AppLayout>
    <template #header>
      <h1 class="text-3xl text-white leading-tight">
        Admin Detail
      </h1>
    </template>
    <div v-for="(admins, index) in admin" :key="index">
  <div v-if="admins.admin_id === 1" class="movie-card-container">
    <div class="movie-card">
 <img :src="admins.photo" alt="photo" style="width: 250px; height: 250px;">
      <div class="card-content">
        <h2>ชื่อเล่น {{ admins.nickname }}</h2>
        <p>
          <b>ชื่อ</b>
          {{ admins.name }}
          <b>นามสกุล</b>
          {{ admins.lastname }}
          <br><br>
          <b>อาชีพ</b><br>
          {{ admins.jobs }}
          <br><br>
          <b>เพศ</b><br>
          {{ admins.gender }}
          <br><br>
          <b>อายุ</b><br>
          {{ admins.age }}
          <br><br>
           <b>ที่อยู่</b><br>
          {{ admins.address }}
          <br><br>
          <b>เบอร์โทรศัพท์</b><br>
          {{ admins.tel }}
          <br><br>
        </p>
        <br>
        <b>แจ้งปัญหาให้แอดมินทราบ</b>
        <br>

       <input type="file" @change="onFileChange">
    <button @click="uploadImage">อัปโหลดรูปภาพ</button>

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
