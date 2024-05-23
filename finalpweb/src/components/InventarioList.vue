<template>
    <div>
      <h1>Lista de Inventario</h1>
      <ul>
        <li v-for="inventario in inventarios" :key="inventario.id">
          Producto: {{ inventario.producto_id }} - Proveedor: {{ inventario.proveedor_id }} - Cantidad: {{ inventario.cantidad }}
        </li>
      </ul>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        inventarios: [],
      };
    },
    mounted() {
      this.fetchInventarios();
    },
    methods: {
      async fetchInventarios() {
        try {
          const response = await axios.get('/api/inventarios');
          this.inventarios = response.data;
        } catch (error) {
          console.error('Error fetching inventarios:', error);
        }
      },
    },
  };
  </script>

  <style scoped>
  /* Estilos opcionales */
  </style>
