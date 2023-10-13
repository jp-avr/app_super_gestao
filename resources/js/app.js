/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

require('./bootstrap');

//call
import feather from 'feather-icons';
 feather.replace();
 

const app = createApp({});

app.mount('#app');

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

// import BackgroundVue from './components/Background.vue';
// app.component('BackgroundVue', BackgroundVue );

// import RodapeVue from './components/rodape.vue';
// app.component('RodapeVue', RodapeVue);


//Rotas das views

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('Background',require('./components/Background.vue').default);
// Vue.component('Login',require('./components/Login.vue').default);
// Vue.component('rodape',require('./components/rodape.vue').default);
// Vue.component('navbar',require('./components/navbar.vue').default);
// Vue.component('marcacao',require('./components/marcacao.vue').default);
// Vue.component('Cadastro',require('./components/Cadastro.vue').default);
// Vue.component('cardconsulta',require('./components/cardconsulta.vue').default);






