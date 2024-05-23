<template>
    <div id="app">
      <nav>
        <ul>
          <li><router-link to="/">Productos</router-link></li>
          <li><router-link to="/categorias">Categorías</router-link></li>
          <li><router-link to="/inventarios">Inventarios</router-link></li>
          <li><router-link to="/transacciones">Transacciones</router-link></li>
        </ul>
      </nav>
      <router-view></router-view>
    </div>
  </template>

  <script>
  export default {
    name: 'App',
  };
  </script>

  <style>
  /* Estilos opcionales */
  nav ul {
    list-style-type: none;
    padding: 0;
  }
  nav ul li {
    display: inline;
    margin-right: 10px;
  }
  </style>
