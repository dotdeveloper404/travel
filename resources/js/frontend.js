/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 import './bootstrap';
 import { createApp } from 'vue';

 import axios from 'axios';

 /**
  * Next, we will create a fresh Vue application instance. You may then begin
  * registering components with the application instance so they are ready
  * to use in your application's views. An example is included for you.
  */
 //  window.Vue = require('vue');
 
 //  Vue.use(VueAxios,axios);
//  axios.defaults.baseURL = 'https://ilinkturkey.com/portal/';
//  axios.defaults.baseURL = 'http://travel.test/portal/';

 const app = createApp({});
  
 Object.entries(import.meta.glob('./frontend/**/*.vue', { eager: true })).forEach(([path, definition]) => {
     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
 });
 
 /**
  * Finally, we will attach the application instance to a HTML element with
  * an "id" attribute of "app". This element is included with the "auth"
  * scaffolding. Otherwise, you will need to add an element yourself.
  */
 
 app.mount('#app');
 
 
 // require('./bootstrap');
 // window.Vue = require('vue');
 // import App from './App.vue';
 // import VueAxios from 'vue-axios';
 // import axios from 'axios';
 
 // Vue.use(VueAxios,axios);
 
 // const files = require.context('./', true, /\.vue$/i);
 // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
 
 // const app  = new Vue({
 //     el : '#app',
 //     render : h => h(App),
 // });
 