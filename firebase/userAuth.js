function user() {
    var x = document.getElementsByClassName("youtube")[0]
    var user = firebase.auth().currentUser;
    var usernameCookie = getCookie("username");




    firebase.auth().onAuthStateChanged(function(user) {



        if (user) {

            var username;

            if (usernameCookie != "") {

                var LoggedIn = '<li class="youtube">Welcome!  ' + ' ' + Upper(usernameCookie) + ' ' + '<a href="" onclick="logout()" style ="margin-left:1em">Logout</a> </li>'
                x.innerHTML = LoggedIn;
            } else {
                //get first name
                firebase.database().ref('Students/' + user.uid).once('value').then(function(snapshot) {
                    username = (snapshot.val() && snapshot.val().FirstName) || 'Anonymous';


                    var LoggedIn = '<li class="youtube">Welcome!' + ' ' + Upper(username) + ' ' + '<a href="" onclick="logout()" style ="margin-left:1em">Logout</a> </li>'
                    x.innerHTML = LoggedIn;
                    var member = document.getElementById('membership');
                    member.style.display = "none";
                    var course = document.getElementById('course');
                    course.style.display = "inline-block";
                    document.cookie = "username=" + username + "; path=/";
                });


            }




        } else {




        }

    });
}




function Signin() {

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
    var message = document.getElementById("message").value; //street address
    var pinCode = document.getElementById("pinCode").value;
    var eMail = document.getElementById("eMail").value;
    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;
    var noth = "0";



    //to delete
    var courses = {

        MachineLearning: {
            VideoWatched: 3,
            PresentDone: "47%"
        },

    }



    var rooms = {

        "1": {
            Name: "Computer Method",
            Validity: Date.now(),
            purchasedAt: Date.now()

        },
        "2": {
            Name: "Computer Method",
            Validity: Date.now(),
            PurchasedAt: Date.now()

        }

    }



    if (password == password2) {

        var details = {
            Country: country,
            State: state,
            City: city,
            Street: message,
            Pin: pinCode
        }



        var data = {
            FirstName: userName,
            MiddleName: middleName,
            LastName: lastName,
            Interest: intrest,
            Adddress: details,
            PhoneNumber: phoneNumber,
            Affiliation: affiliation,
            Follows: courses,
            DateOfBirth: dateOfBirth,
            Gender: gender,
            Subscription: rooms
        }




        firebase.auth().createUserWithEmailAndPassword(eMail, password)
            .then(user => {

                var user = firebase.auth().currentUser;
                var ref = firebase.database().ref('Students/' + user.uid);
                ref.set(data);
                console.log(user);
                location.href = "index.php";
            })
            .catch(error => {
                console.log(error)
            })




        return true;
    }

}

function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;
    console.log(email);
    console.log(password);

    event.preventDefault();
    firebase.auth().signInWithEmailAndPassword(email, password).then(user => {

            var user = firebase.auth().currentUser;

            console.log(user);

            location.href = "index.php";
            user();

        })

        .catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            var er = document.getElementById('error');
            er.innerHTML = 'Username or Password is not Correct.'
        });


}



function logout() {
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    firebase.auth().signOut().then(function() {
        // Sign-out successful.
        var logged = '<li class="youtube" id="youtube"> <p> <a href="#modal" id= "modal_trigger" >Login  </a> | <a href="signup.php" title="Register"> Register</a></p> </li>'
        x.innerHTML = logged;

    }).catch(function(error) {
        // An error happened.
    });
}




//Utilities

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function test() {
    alert('hey');
}

function Upper(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}