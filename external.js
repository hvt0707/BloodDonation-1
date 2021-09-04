function calculateAge(){
    var user_date=document.getElementById("DOB").value;
    var dob = new Date(user_date);  
    var dif_month = Date.now() - dob.getTime();  
    var month_date_format = new Date(dif_month);       
    var year = month_date_format.getUTCFullYear();  
    var user_age = Math.abs(year - 1970);   
    document.getElementById("age").value = user_age;  
}
function validatingAge(){
    var age=document.getElementById("age").value;
    if(age<18){
        alert("Age of donor can't be less than 18 years.");
    }
}