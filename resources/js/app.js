import "./bootstrap";

import { createApp } from "vue";

import App from "./components/App.vue";

window.app = createApp(App).mount("#app");
