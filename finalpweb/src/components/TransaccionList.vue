<template>
    <div>
      <h1>Lista de Transacciones</h1>
      <ul>
        <li v-for="transaccion in transacciones" :key="transaccion.id">
          Producto: {{ transaccion.producto_id }} - Tipo: {{ transaccion.tipo }} - Cantidad: {{ transaccion.cantidad }} - Fecha: {{ transaccion.fecha }}
        </li>
      </ul>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        transacciones: [],
      };
    },
    mounted() {
      this.fetchTransacciones();
    },
    methods: {
      async fetchTransacciones() {
        try {
          const response = await axios.get('/api/transacciones');
          this.transacciones = response.data;
        } catch (error) {
          console.error('Error fetching transacciones:', error);
        }
      },
    },
  };
  </script>

  <style scoped>
  /* Estilos opcionales */
  </style>
