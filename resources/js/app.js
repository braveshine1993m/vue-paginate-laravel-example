
require('./bootstrap');

window.Vue = require('vue').default;


import App from "./components/ExampleComponent.vue";
const app = new Vue({
    el: '#app',
    render: h => h(App),
});
