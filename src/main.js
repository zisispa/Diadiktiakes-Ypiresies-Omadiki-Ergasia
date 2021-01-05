import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import "./index.css";
import firebase from "firebase/app";
import "./firebase/init";

Vue.config.productionTip = false;

let app;
firebase.auth().onAuthStateChanged((user) => {
  if (!app) {
    app = new Vue({
      router,
      render: (h) => h(App),
    }).$mount("#app");
  }
});
