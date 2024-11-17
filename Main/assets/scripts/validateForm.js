function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    if (x == null || x == "") {
        document.forms["OrderForm"]["customerName"].style.backgroundColor = 'blue';
        return false;
    }
}

function getHTTPObject() {
    var xmlhttp;
    // branch for native XMLHttpRequest object
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }
    // branch for IE/Windows ActiveX version
    else if (window.ActiveXObject){
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
    }else{	
        return false;
    }
    return xmlhttp;
}

// We create the HTTP Object
var http = getHTTPObject();

function checkUsers(){

    if(http){
        console.log("working");
        http.open("GET","addBooking.php",true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
    } 
    else{
        console.log("FAIL");
    }
}

function handleHttpResponse(){
    if(http.readyState == 4){
        // console.log("File Contents: " + http.responseText);
        var jsonObj = JSON.parse(http.responseText);
        console.log(jsonObj);
        dealData(jsonObj);
    }
}

function dealData(arr){
    var myData = "";
    if(arr){
        myData="Your adventure awaits";
        console.log("DING DING")
    }
    else{
        
        myData="Their has been and error";
    }
    console.log(myData);
}

function addUser(){
    let name = document.getElementById('customerName').value;
    let email = document.getElementById('customerEmail').value;
    let adventure = document.getElementById('customerAdventure').value;
    let date = document.getElementById('customerDate').value;
    let number = document.getElementById('customerNumber').value;
  

    if(http){
        console.log("active");
        http.open("GET","addBooking.php?customerName="+name+"&customerEmail="+email+"&customerAdventure="+adventure+"&customerDate="+date+"&customerNumber="+number,true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
    }
}

document.getElementsByClassName("buttons").onload = checkUsers();


