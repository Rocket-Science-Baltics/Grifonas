import { createApp, defineAsyncComponent } from "vue";
import App from "../bin/app.vue";

export default function initComponents() {
  document.querySelectorAll('.app').forEach((el, i) => {
    createApp({...App, name: 'App ' + i}, {
      component: el.getAttribute('data-component').replace(/_/g, '-'),
        props: JSON.parse(el.getAttribute('data-props'))
      }).mount(el);
  })

}
