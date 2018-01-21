
function user(){
var x = document.getElementsByClassName("youtube")[0]
var user = firebase.auth().currentUser;


firebase.auth().onAuthStateChanged(function(user) {
var LoggedIn ='<li class="youtube">Welcome! Aashis <a href="#modal" id= "modal_trigger" style ="margin-left:1em">Logout</a> </li>'

    if (user) {
        LoggedIn + x.innerHTML;
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
    var courses = ["machine learning","OOPJ","How to cook"];
    var rooms = ["electrical engineering","computerScience"];
    

    console.log(city)
    if (password == password2){
    
        var details = {
            country :country,
            state : state,
            city : city,
            street : message,
            pin : pinCode
           }

    
    
        var data = {
             firstname :userName,
             middlename:middleName, 
             lastname : lastName ,
             interest :intrest, 
             adddress :details, 
             phoneNumber : phoneNumber,
             affiliation:affiliation,
             follows: courses,
             dateofbirth :dateOfBirth,
             gender : gender,
             subscription: rooms
    }
    
    var database = firebase.database();
    var ref = database.ref('students');
    ref.push(data);

   

    return true;
    }
    
    }
    

