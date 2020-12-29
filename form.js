
  // Your web app's Firebase configuration
    // var firebaseConfig = {
    // apiKey: "AIzaSyA2ckAeTAG8ch1nbJMWWHk0l3-p8IB7N1M",
    // authDomain: "cars-91a26.firebaseapp.com",
    // databaseURL: "https://cars-91a26.firebaseio.com",
    // projectId: "cars-91a26",
    // storageBucket: "cars-91a26.appspot.com",
    // messagingSenderId: "713005989129",
    // appId: "1:713005989129:web:024d128c0213b56697e7d8",
    // measurementId: "G-7B11QDBQDL"
  // };
  
  // var firebaseConfig = {
  // apiKey: "AIzaSyA2ckAeTAG8ch1nbJMWWHk0l3-p8IB7N1M",
  // authDomain: "cars-91a26.firebaseapp.com",
  // databaseURL: "https://cars-91a26.firebaseio.com",
  // projectId: "cars-91a26",
  // storageBucket: "cars-91a26.appspot.com",
  // messagingSenderId: "713005989129",
  // appId: "1:713005989129:web:024d128c0213b56697e7d8",
  // measurementId: "G-7B11QDBQDL"
// };
  // Initialize Firebase
  // firebase.initializeApp(firebaseConfig);
  
  var firebaseConfig = {
    apiKey: "AIzaSyA2ckAeTAG8ch1nbJMWWHk0l3-p8IB7N1M",
    authDomain: "cars-91a26.firebaseapp.com",
    databaseURL: "https://cars-91a26.firebaseio.com",
    projectId: "cars-91a26",
    storageBucket: "cars-91a26.appspot.com",
    messagingSenderId: "713005989129",
    appId: "1:713005989129:web:b776aa7b25857b4e97e7d8",
    measurementId: "G-Q0JS5Q37JM"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  // firebase.analytics();
  
  var storage = firebase.storage();

// Create a storage reference from our storage service
  var storageRef = storage.ref();
  


	const auth = firebase.auth();
	
	function signUp(){
		
		var email = document.getElementById("email");
		var password = document.getElementById("password");
		
		const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
		
		promise.catch(e => alert(e.message));
		
		alert("SignedUp");
	}
	
	function signIn(){
		
		window.location = "dashboard.php"
		
		var email = document.getElementById("email");
		var password = document.getElementById("password");
		
		const promise = auth.signInWithEmailAndPassword(email.value, password.value);
		
		promise.catch(e => alert(e.message));
		
		alert("Welcome: " + email.value);
		
		window.location = "dashboard.php";
	}
	
	auth.onAuthStateChanged(function(user){
		
		if (user){
			window.location = "dashboard.php";
		}
		else{
		}
		
	})
	