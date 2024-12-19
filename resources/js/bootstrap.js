import _ from 'lodash';
window._ = _;

import axios from 'axios';
window.axios = axios;

// Configurar encabezado CSRF si usas Axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

console.log('Bootstrap JS cargado correctamente');
