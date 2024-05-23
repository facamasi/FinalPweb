<template>
    <div>
      <h1>Lista de Categorías</h1>
      <ul>
        <li v-for="categoria in categorias" :key="categoria.id">
          {{ categoria.nombre }} - {{ categoria.descripcion }}
        </li>
      </ul>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        categorias: [],
      };
    },
    mounted() {
      this.fetchCategorias();
    },
    methods: {
      async fetchCategorias() {
        try {
          const response = await axios.get('/api/categorias');
          this.categorias = response.data;
        } catch (error) {
          console.error('Error fetching categorias:', error);
        }
      },
    },
  };
  </script>

  <style scoped>
  /* Estilos opcionales */
  </style>
