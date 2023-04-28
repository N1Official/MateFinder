<template>
  <!-- Head -->
  <div class="head" id="home">
        <!-- Head Title -->
        <a class="head-title" href="/">
            MateFinder
        </a>

        <!-- Head Nav -->
        <div class="head-nav">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#about">About</a>
            <a href="#vision">Vision</a>
            <a href="#events">Events</a>
            <a href="#contact">Contact</a>
        </div>
        
        <!-- Head User -->
        <a class="head-user" href="#">
            <img src="../../assets/icons/user.svg" alt="user">
        </a>

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
