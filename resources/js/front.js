

require('./bootstrap');

window.Vue = require('vue');

import router from './router';
import App from './components/App.vue';

const root = new Vue({
    el: '#root',
    router,
    render: h => h(App),
});

