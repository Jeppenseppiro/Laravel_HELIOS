import "./bootstrap";
// import "laravel-datatables-vite";
import "../css/app.css";

// Alpine
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

//Axios

// VueJS

import { createApp } from "vue";

const app = createApp({});

import ViewMapComponent from "./components/map/ViewMap.vue";
import ViewTablePrimaryDistributions from "./components/database/ViewTablePrimaryDistributions.vue";
import TableDistributionComponent from "./components/TableDistribution.vue";
import HeaderCreateComponent from "./components/HeaderCreate.vue";
import ButtonTableRowCreateComponent from "./components/ButtonTableRowCreate.vue";

app.component("view-map-component", ViewMapComponent).default;
app.component(
  "table-primary-distribution-component",
  ViewTablePrimaryDistributions
);
app.component("table-distribution-component", TableDistributionComponent);
app.component("header-create-component", HeaderCreateComponent);
app.component(
  "button-table-row-create-component",
  ButtonTableRowCreateComponent
);
app.mount("#app");
