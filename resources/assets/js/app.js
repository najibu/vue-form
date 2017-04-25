import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';
import Example from './components/Example';
import Notification from './components/Notification.vue'

window.axios = axios;
window.Form = Form;

new Vue({
  el: '#app',

  components: {
    Example,
    Notification
  },

  data: {
    form: new Form({
      name: '',
      description: '',
    })
  },

  methods: {
    onSubmit(){
      this.form.post('/projects')
          .then(data => console.log(data))
          .catch(errors => console.log(errors));
    }
  }
});


