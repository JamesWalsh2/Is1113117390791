/* global $ */

//Validation functions
function validateDetails(){
    
    var number = document.forms["card details"]["user_number"].value;
    
     if (number==""){
        alert("Please enter your Card Number");
        return false;
        }
     else if (String(number).length<16){
        alert("Please make sure your Card Number is accurate");
        return false;
        }
    else {
        true;
        cvv();
    }
}
       
function cvv(){
      
    var cvv = document.forms["card details"]["user_cvv"].value;
    
     if (cvv==""){
        alert("Please enter your CVV");
        return false;
        }
    else if (String(cvv).length<3){
        alert("Please make sure your CVV is accurate");
        return false;
        }
    else {
        true;
        pin();
    }
}
    
function pin(){
    
    var pin = document.forms["card details"]["user_pin"].value;
    
    if (pin==""){
        alert("Please enter your Pin");
        return false;
        }
    else if (String(pin).length<4){
        alert("Please make sure your Pin is accurate");
        return false;
        }
    else {
        true;
        enablebtnPurchase();
}
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}