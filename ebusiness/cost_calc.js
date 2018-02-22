/* global $ */

function calcSub(){
    
    var argSubTotal; 
    
    if(document.getElementById('salesforce').checked){
    argSubTotal=100;
    }
    else if(document.getElementById('cloud 9').checked){
        argSubTotal=200;
    }
    else if(document.getElementById('amazon web services').checked){
        argSubTotal=300;
    }
    else{
        argSubTotal=400;
    }
    
   //Calling the calcDisVatTotal function
   calcDisVatTotal(argSubTotal);

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value= parm1;
    document.getElementById("discount").value= parm2;
    document.getElementById("vat").value= parm3;
    document.getElementById("total").value= parm4;
    
    enablebtnProceed();
    
    
}   
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
    
} 
function disablebtnProceed(){
    $('#btnProceed').prop('disabled',true); 
} 

function calcDisVatTotal(parmSubTotal){
    //Declaring variables for function
    var vatrate=0.1;
    var discount=0.05;
    var vat;
    var discount;
    var subtotal;
    var total;
    
    subtotal = parmSubTotal;
    vat = (parmSubTotal * vatrate); //Multiplying subtotal by vat rate to get the vat amount
    discount = (parmSubTotal * discount); //Multiplying subtotal by discount rate to get discount amount
    total = (parmSubTotal + vat - discount); //Calculating total
    
    display(subtotal, discount, vat, total); //Displaying the values
    ;
}
}


    
    
    
    
    
    
    
