/* global $ */
function validateDetails(){
   
    var email;
    email = document.getElementById("email").value;
    if (email== ""){
        alert("Please enter your email");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
    var firstname;
    firstname = document.getElementById("firstname").value;
    if (firstname== ""){
        alert("Please enter your First Name");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
    var lastname;
    lastname = document.getElementById("lastname").value;
    if (lastname== ""){
        alert("Please enter your Last Name");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
    var address;
    address = document.getElementById("address").value;
    if (address== ""){
        alert("Please enter your Address");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
    var city;
    city = document.getElementById("city").value;
    if (city== ""){
        alert("Please enter your City");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
    var myList;
    myList = document.getElementById("myList").value;
    if (myList== ""){
        alert("Please pick a country");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
    var postalcode;
    postalcode = document.getElementById("postalcode").value;
    if (postalcode== ""){
        alert("Please enter your Postal Code");
         return false;
        }
    else{
        enablebtnPurchase();
        }
        
   var number;
    pin = document.getElementById("cardnumber").value;
    if (number==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<10){
        alert("Please make sure your card number is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
   var cardnumber;
    pin = document.getElementById("cardnumber").value;
    if (cardnumber==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<16){
        alert("Please make sure your card number is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
    var name;
    name = document.getElementById("name").value;
    if (name== ""){
        alert("Please enter your Name");
         return false;
        }
    else{
        enablebtnPurchase();
        }    
        
    var mmyy;
    mmyy = document.getElementById("mmyy").value;
    if (mmyy==""){
        alert("Please enter your MM/YY");
        }
    else if (String(mmyy).length<7){
        alert("Please make sure your MM/YY is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
    var pin;
    pin = document.getElementById("user_pin").value;
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}
function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
function MyFunction(){
    
}