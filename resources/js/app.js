// Alpine
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

//Axios

// VueJS
import "./bootstrap";
import { createApp } from "vue";

const app = createApp({});

// import ExampleComponent from "./components/ExampleComponent.vue";
import TableDistributionComponent from "./components/TableDistribution.vue";
import HeaderCreateComponent from "./components/HeaderCreate.vue";
import ButtonTableRowCreateComponent from "./components/ButtonTableRowCreate.vue";

// app.component("example-component", ExampleComponent);
app.component("table-distribution-component", TableDistributionComponent);
app.component("header-create-component", HeaderCreateComponent);
app.component(
  "button-table-row-create-component",
  ButtonTableRowCreateComponent
);
app.mount("#app");
