<script setup>
import { RouterView } from 'vue-router'
import Foot from './components/layout/Foot.vue'
import Head from './components/layout/Head.vue';
import LandingPage from './pages/LandingPage.vue';
</script>

<template>
  <Head/>
  <LandingPage/>
  <Foot/>
  <RouterView/>
</template>
