/**
 * Created by admin on 28-04-2016.
 */
function check_blank(){
   // var fname=document.getElementById(id).value;
   var fname=document.regis.fname.value;
    var lname=document.regis.lname.value;
    var address=document.regis.address.value;
    var mobile=document.regis.mobile.value;
    var password=document.regis.password.value;
    var email=document.regis.email.value;
    
    if(fname==""){
        alert("enter your first name");
        document.regis.fname.focus();
        return false;
    }
    else if(lname==""){
        alert("enter your last name");
        document.regis.lname.focus();
        return false;
    }
    else if(email==""){
        alert("enter your email id");
        document.regis.email.focus();
        return false;
    }
    else if(password==""){
        alert("enter your password");
        document.regis.password.focus();
        return false;
    }

    else if(mobile==""){
        alert("enter your mobile number");
        document.regis.mobile.focus();
        return false;
    }
    else if(address==""){
        alert("enter your address");
        document.regis.address.focus();
        return false;
    }
    return true;

}