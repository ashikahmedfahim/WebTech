

    function validateForm(){
        var emailn = document.getElementById("emailn").value;
        if(emailn == ""){
            console.log(emailn);
           return false;
        }
        else{
            return true;
        }
    }