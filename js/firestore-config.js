var config = {
	apiKey: "AIzaSyCak7BwZUgb7xg9MVMbXLttwE_LtYd0FUc",
	authDomain: "testchatme-821c6.firebaseapp.com",
	databaseURL: "https://testchatme-821c6.firebaseio.com",
	projectId: "testchatme-821c6",
	storageBucket: "testchatme-821c6.appspot.com",
	messagingSenderId: "674280562497",
	appId: "1:674280562497:web:9b13ef11c3fea9ea7a4bc0",
	measurementId: "G-81KJ0M49ST"
};

// Initialize Firebase
firebase.initializeApp(config);

// Initialize Cloud Firestore through Firebase
var db = firebase.firestore();

// Disable deprecated features
db.settings({
	timestampsInSnapshots: true
});

