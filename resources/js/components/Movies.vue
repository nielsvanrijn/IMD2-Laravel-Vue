<template>
  <div class="row justify-content-center mt-5 cards">
    <div class="card m-3" style="width: 18rem;" v-for="movie in movies" v-bind:key="movie.id">
      <img class="card-img-top" v-bind:src="movie.poster_url" v-if="movie.poster_url !== null">
      <img class="card-img-top" v-bind:src="'https://raw.githubusercontent.com/nielsvanrijn/Webframework-app/master/public/uploads/posters/default.jpg'" v-else/>
      <div class="card-body">
        <div class="row align-items-center">
          <h4 class="col-6">{{ movie.title }}</h4>
          <h2 class="col-6 text-right">{{ movie.score }}</h2>
        </div>
        <span class="text-warning" v-for="(genre, index) in movie.genres" v-bind:key="genre.id">{{ genre.genre }}<span v-if="index != movie.genres.length-1">, </span></span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      movies: [],
      movie:{
        id: '',
        title: '',
        year: '',
        score: '',
        description: '',
        duration: '',
        traler_url: '',
        poster_url: ''
      },
      movie_id: ''
    }
  },

  created() {
    this.fetchMovies();
  },

  methods: {
    fetchMovies(){
      fetch('api/movies')
      .then(res => res.json())
      .then(res => {
        this.movies = res;
      })
    }
  }
}
</script>
