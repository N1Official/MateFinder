<script setup>
import { RouterView } from 'vue-router'
import Foot from '@/components/layout/Foot.vue'
import Head from './components/layout/Head.vue';
import LandingPage from './pages/HomePage.vue';
</script>

<template>
  <Head/>
  <Foot/>
  <RouterView/>
</template>
