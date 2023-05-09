<template>
		<div class="container">
			<div v-for="searcher in searchers" :key="searcher.id" class="card">
				<div class="content">
					<div class="imgBx">
						<img v-bind:src="searcher.avatar">
					</div>
					<div class="contentBx">
						<h3>{{ searcher.username }}<br></h3>
					</div>
				</div>
				<ul class="sci">
          <li>
            <a :href="searcher.profilelink" target="_blank">Profile</a>
					</li>
					<li>
            <a>{{ searcher.goal }}</a>
					</li>
					<li>
						<a>{{ searcher.gender }}</a>
					</li>
				</ul>
			</div>
		</div>
</template>

<script setup>
import {onMounted, reactive} from "vue";
import {http} from "../utils/http.mjs";
const searchers = reactive([]);
async function getSearchers(){
  const rawSearchers = await http.get('searcher');
  for (const searcher of rawSearchers.data.data){
    searchers.push(searcher);
  }
}
onMounted(getSearchers);

</script>





