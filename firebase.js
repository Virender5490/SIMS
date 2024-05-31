import firebase from "firebase";

// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCZUdy8Oq9Euv3hn_nWPtmsRMfY65M09tE",
  authDomain: "ecommers-2f138.firebaseapp.com",
  projectId: "ecommers-2f138",
  storageBucket: "ecommers-2f138.appspot.com",
  messagingSenderId: "819585621769",
  appId: "1:819585621769:web:80201883453795ff157dd8",
  measurementId: "G-ZCTY4EPG75"
};
const firebaseApp = firebase.initializeApp(firebaseConfig);

const db = firebaseApp.firestore();
const auth = firebase.auth();

export { db, auth };