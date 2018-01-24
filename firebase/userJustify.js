function userStay(){
    var user = firebase.auth().currentUser;
    firebase.auth().onAuthStateChanged(function(user) {
          if (user) {return true;} else {location.href="index.php"}
          });
}