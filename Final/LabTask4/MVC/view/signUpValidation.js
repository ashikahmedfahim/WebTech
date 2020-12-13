
    function validateForm(){
        var id = document.getElementById("id").value;
        var userName = document.getElementById("userName").value;
        var email = document.getElementById("email").value;
        var dob = document.getElementById("dob").value;
        var password = document.getElementById("password").value;
        if(id == "" || password == "" || userName == "" || email == "" || dob == ""){
            document.getElementById("Err").innerHTML="All field is required";
           return false;
        }
        else{
            return true;
        }
    }