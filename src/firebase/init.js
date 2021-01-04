import firebase from "firebase/app";
import "firebase/firestore";

var firebaseConfig = {
  apiKey: "AIzaSyBC5eIpUCyT9vi2DKBVG-vdmVmXLa_yh6g",
  authDomain: "searchapp-bb01d.firebaseapp.com",
  projectId: "searchapp-bb01d",
  storageBucket: "searchapp-bb01d.appspot.com",
  messagingSenderId: "59413472828",
  appId: "1:59413472828:web:0b97dfd8b8e66f31410539",
};

// Initialize Firebase
const firebaseApp = firebase.initializeApp(firebaseConfig);

//export firestore database
export default firebaseApp.firestore();
