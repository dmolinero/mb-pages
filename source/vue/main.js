var Vue = require('vue/dist/vue.common');
var Test = require('./components/test.vue');

Vue.component('test', Test);

new Vue({
  el: '#app'
});