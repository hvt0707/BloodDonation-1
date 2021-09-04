function phonevalidator(){
    var x=document.getElementById("phonenumber");
    var phoneno=/^[6-9][0-9]{9}$/;
    if(!x.value.match(phoneno)){
        alert("This is not a valid phone number");
        return false;
    }
}
function passvalidator(){
    var pass1=document.getElementById("pass");
    var pass2=document.getElementById("conf_pass");
    if(pass1.value!=pass2.value){
        alert("Passwords don't match");
    }
}
function emailvalidator(){
    var email=document.getElementById("email");
    var mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.value.match(mail)){
        alert("This is not a valid email id");
    }
}