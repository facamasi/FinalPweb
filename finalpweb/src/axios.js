import axios from 'axios';

const instance = axios.create({
  baseURL: 'http://127.0.0.1:8000/api', // Cambia esto a la URL base de tu API
});

export default instance;
