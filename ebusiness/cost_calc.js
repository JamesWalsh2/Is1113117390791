/* global $ */

     var argSubtotal;
     var discountAmt
     var vatAmt
     var totalPrice

function calcSub(){
    
        if(document.getElementById('salesforce').checked) {
            argSubtotal = 100;
            calDisVatTotal();
        }
        if(document.getElementById('cloud9').checked) {
            argSubtotal = 200;
            calDisVatTotal();
        }
       if(document.getElementById('aws').checked) {
            argSubtotal = 300;
            calDisVatTotal();
        }
       if(document.getElementById('gmail').checked) {
            argSubtotal = 400;
            calDisVatTotal();
        }

}

function calDisVatTotal(parmSubTotal){

        discountAmt = argSubtotal * 0.05;
        vatAmt = (argSubtotal - discountAmt) * .10;
        totalPrice = (argSubtotal - discountAmt) + vatAmt;
      
display(argSubtotal, discountAmt, vatAmt, totalPrice);
}
        
function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}


function enablebtnProceed() {
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}