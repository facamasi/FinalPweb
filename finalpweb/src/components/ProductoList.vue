<template>
    <div>
      <h1>Lista de Productos</h1>
      <ul>
        <li v-for="producto in productos" :key="producto.id">
          {{ producto.nombre }} - {{ producto.descripcion }} - ${{ producto.precio }}
        </li>
      </ul>
    </div>
  </template>

  <script>
  import axios from '../axios'; // Importa la instancia de Axios

  export default {
    data() {
      return {
        productos: [],
      };
    },
    mounted() {
      this.fetchProductos();
    },
    methods: {
      async fetchProductos() {
        try {
          const response = await axios.get('/productos');
          this.productos = response.data;
        } catch (error) {
          console.error('Error fetching productos:', error);
        }
      },
    },
  };
  </script>

  <style scoped>
  /* Estilos opcionales */
  </style>
