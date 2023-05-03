<template>
  <!-- Head -->
  <div class="head" id="home">
        <!-- Head Title -->
        <a class="head-title" href="/">
            MateFinder
        </a>

        <!-- Head Nav -->
        <div class="head-nav">
            <router-link to="/">Home</router-link>
            <a href="#features">Features</a>
            <a href="#about">About</a>
            <a href="#vision">Vision</a>
            <a href="#contact">Contact</a>
        </div>
        
        <!-- Head Button -->
        <router-link class="head-button" to="/form">
            <span class="head-button">Search</span>
        </router-link>

        <!-- Head Burgir -->
        <div class="head-burgir">
            <input type="checkbox" id="burgir">
        
            <label for="burgir">
                <div class="head-burgir-top"></div>
                <div class="head-burgir-bot"></div>
            </label>
        </div>
    </div>
</template>

<script setup>
function onChange(locale){
    localStorage.setItem('locale',locale);
}
</script>
