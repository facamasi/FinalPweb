import { createRouter, createWebHistory } from 'vue-router';
import ProductoList from '../components/ProductoList.vue';
import CategoriaList from '../components/CategoriaList.vue';
import InventarioList from '../components/InventarioList.vue';
import TransaccionList from '../components/TransaccionList.vue';

const routes = [
  { path: '/', name: 'Home', component: ProductoList },
  { path: '/categorias', name: 'Categorias', component: CategoriaList },
  { path: '/inventarios', name: 'Inventarios', component: InventarioList },
  { path: '/transacciones', name: 'Transacciones', component: TransaccionList },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
