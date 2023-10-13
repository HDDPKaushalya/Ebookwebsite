
function validateUSname(){
    var usname = document.getElementById("usname").value;
    
if(usname.length == 0){

    userro.innerHTML = 'User Name is required';
    return false;
    }
    userro.innerHTML = ''
    return true;
}
function validateName(){
    var name = document.getElementById("name").value;

    if(name.length == 0){
     nameerro.innerHTML = 'Name is required'

    return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
     nameerro.innerHTML = 'Write Full name'
     return false;

     }
     nameerro.innerHTML = ''
     return true;
    
}
function validateEmail() {
    var Email = document.getElementById("Email").value;

   if(Email.length == 0){
     emailerro.innerHTML = 'Email is required'
     return false;
   }
   emailerro.innerHTML = ''
    return true;
}
function validateAddress(){
    var Address = document.getElementById("Address").value;

   if(Address.length == 0){
   addresserro.innerHTML = 'Address is required'
   return false;
   }
   addresserro.innerHTML = ''
   return true;

}  
function validateContactNo(){
    var ContNo = document.getElementById("ContNo").value;
    if(ContNo.length == 0){
      contacterro.innerHTML = 'Contact Number is required'

    return false;
   }
   else if(ContNo.length < 10 || ContNo.length > 10){
      contacterro.innerHTML = 'Contact Number should be 10 digits'
      return false;
   }
   else if(!ContNo.match(/^[0-9]{10}$/)){
   contacterro.innerHTML = 'Only digits'
   return false;

  }else if(ContNo.length == 10){
   contacterro.innerHTML = ''
   return true;
  }
}
function validatePass(){
    var Password = document.getElementById("Password").value;

    if(Password.length == 0){
        passerro.innerHTML = 'Password is required'
     return false;
    }
    passerro.innerHTML = ''
     return true;
}
function validatecPass(){
    var cPassword = document.getElementById("cPassword").value;
    var Password = document.getElementById("Password").value;

   if(cPassword == 0){
    cpasserro.innerHTML = 'Confirm Password is required'
       return false;
   }

   if(cPassword == Password){
    cpasserro.innerHTML = ''
    return true;
   } else{
    cpasserro.innerHTML = 'Password do not match'
    return false;
   }


}
