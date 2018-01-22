
function user(){
var x = document.getElementsByClassName("youtube")[0]
var user = firebase.auth().currentUser;




firebase.auth().onAuthStateChanged(function(user) {
    
var LoggedIn ='<li class="youtube">Welcome!' +' ' + user.uid +' '+ '<a href="#modal" id= "modal_trigger" style ="margin-left:1em">Logout</a> </li>'

    if (user) {
        
       // LoggedIn + x.innerHTML;
       
    } else {
     
       //todo : User is not logged in do somthing

    }

  });
}


function test(){
    alert('hey');
}








function Signin(){
    
    event.preventDefault();
    var userName = document.getElementById("userName").value;
    var middleName = document.getElementById("middleName").value;
    var lastName = document.getElementById("lastName").value;
    var gender = document.getElementById("gender").value;
    var dateOfBirth = document.getElementById("datepicker1").value;
    var intrest = document.getElementById("intrest").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var affiliation = document.getElementById("affiliation").value;
    var country = document.getElementById("country").value;
    var state = document.getElementById("state").value;
    var city = document.getElementById("city").value;
    var message  = document.getElementById("message").value;         //street address
    var pinCode = document.getElementById("pinCode").value;
    var eMail = document.getElementById("eMail").value;
    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;
    var noth = "0";

   
   
    //to delete
    var courses = {

        MachineLearning : {
            VideoWatched : 3,
            PresentDone  : "47%"
        },

    }
    
    
    
    var rooms = {
            
            "1": {
                Name : "Computer Method",
                Validity : Date.now(),
                purchasedAt: Date.now()

            },
            "2": {
                Name : "Computer Method",
                Validity : Date.now(),
                PurchasedAt: Date.now()

            }

        }
    

  
    if (password == password2){
    
        var details = {
            Country :country,
            State : state,
            City : city,
            Street : message,
            Pin : pinCode
           }

    
    
        var data = {
             FirstName :userName,
             MiddleName:middleName, 
             LastName : lastName ,
             Interest :intrest, 
             Adddress :details, 
             PhoneNumber : phoneNumber,
             Affiliation:affiliation,
             Follows: courses,
             DateOfBirth :dateOfBirth,
             Gender : gender,
             Subscription: rooms
    }
    
   
            var ref = firebase.database().ref('Students');
            ref.push(data);
    

    firebase.auth().createUserWithEmailAndPassword(eMail,password)
        .then(user =>{

            var user = firebase.auth().currentUser;
            var ref = firebase.database().ref('Students/'+user.uid);
            ref.set(data);
            console.log(user);
            location.href="index.php";
        })
        .catch(error =>{
            console.log(error)
        })

    
   

   

    return true;
    }
    
    }
    
function login(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;
    console.log(email);
    console.log(password);

    event.preventDefault();
    firebase.auth().signInWithEmailAndPassword(email, password).then(user =>{

        var user = firebase.auth().currentUser;
       
        console.log(user);
        
    })
    
    .catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage)
      });
      user();
    }
function logout(){
    firebase.auth().signOut().then(function() {
        // Sign-out successful.
      }).catch(function(error) {
        // An error happened.
      });
    }