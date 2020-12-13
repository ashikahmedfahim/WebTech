
    function validateForm(){
        var id = document.getElementById("id").value;
        var password = document.getElementById("password").value;
        if(id == "" || password == ""){
            if(id == "" ){
                document.getElementById("idErr").innerHTML="An Id is required";
            }
            else{
                document.getElementById("idErr").innerHTML=""; 
            }
            if(password == ""){
                document.getElementById("passwordErr").innerHTML="A password is required";
            }
            else{
                document.getElementById("passwordErr").innerHTML="";
            }
           return false;
        }
        else{
            return true;
        }
    }