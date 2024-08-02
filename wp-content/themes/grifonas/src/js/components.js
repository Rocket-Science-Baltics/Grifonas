import { createApp } from "vue";
import App from "../bin/app.vue";

export default function initComponents() {
  document.querySelectorAll(".app").forEach((el, i) => {
    const componentName = el.getAttribute("data-component")?.replace(/_/g, "-");
    const componentProps = el.getAttribute("data-props");

    if (!componentName) {
      console.error(`Component name not found for element:`, el);
      return;
    }

    const parsedProps = componentProps ? JSON.parse(componentProps) : {};

    const app = createApp(App, {
      component: componentName,
      props: parsedProps,
    });

    app.mount(el);
  });
}
