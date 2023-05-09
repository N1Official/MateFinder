<template>
    <div id="flashcard-app" class="container">

<h1>Flashcard App!</h1>

<div class="flashcard-form">
<label for="front">Front
  <input v-model="newFront" type="text" id="front">
</label>
<label for="back">Back
  <input v-on:keypress.enter="addNew" v-model="newBack" type="text" id="back">
</label>
<button v-on:click="addNew">Add a New Card</button>
<span v-show="error" class="error">Oops! Flashcards need a front and a back.</span>
</div>

<ul class="flashcard-list">
<li v-on:click="toggleCard(card)" v-for="(card, index) in cards">
  <transition name="flip">
    <p v-bind:key="card.flipped" class="card">
        {{ card.flipped ? card.back : card.front }}
        <span v-on:click="cards.splice(index, 1)" class="delete-card">X</span>
    </p>
  </transition>
</li>
</ul>
</div>
</template>

<script>
import { http } from '../utils/http.mjs';

export default{

data: {
  cards: [],
  newFront: '',
  newBack: '',
  error: false
},
methods: {
  toggleCard: function(card) {
    card.flipped = !card.flipped;
  },
  addNew: function() {
    if(!this.newFront || !this.newBack) {
      this.error = true;
    } else {
      this.cards.push({
        front: this.newFront,
        back: this.newBack,
        flipped: false
      });
      // set the field empty
      this.newFront = '';
      this.newBack = '';
      // Make the warning go away
      this.error= false;
    }
  }
}
}
</script>





