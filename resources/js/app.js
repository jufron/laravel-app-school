import './bootstrap';

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import chart01 from "./components/chart-01";
import chart02 from "./components/chart-02";
import chart03 from "./components/chart-03";
import chart04 from "./components/chart-04";
import map01 from "./components/map-01";
import testimoni from './testimoni';
import general from './general';

Alpine.plugin(persist);
window.Alpine = Alpine;

// Alpine.data('testimoni', testimoni);
Alpine.start();

// Document Loaded
document.addEventListener("DOMContentLoaded", () => {
  chart01();
  chart02();
  chart03();
  chart04();
  map01();
  testimoni();
  general();
});
