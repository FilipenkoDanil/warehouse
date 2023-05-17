import './bootstrap';
import { createApp } from 'vue';
import vuetify from "./vuetify";
import router from "./router";
import ExampleComponent from './components/ExampleComponent.vue';


const app = createApp({});

app.component('example-component', ExampleComponent);
app.use(vuetify).use(router).mount('#app')
