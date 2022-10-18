// Alpine
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

// VueJS
import "./bootstrap";
import { createApp } from "vue";

// import ExampleComponent from "./components/ExampleComponent.vue";
import TableDistributionComponent from "./components/TableDistribution.vue";
import HeaderCreateComponent from "./components/HeaderCreate.vue";
import TableRowCreateComponent from "./components/TableRowCreate.vue";

const app = createApp({});

// app.component("example-component", ExampleComponent);
app.component("table-distribution-component", TableDistributionComponent);
app.component("header-create-component", HeaderCreateComponent);
app.component("table-row-create-component", TableRowCreateComponent);
app.mount("#app");
