



//setup - code to create the object



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
        http.open("GET","addComment.php",true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
        window.setTimeout('checkUsers();', 1500);
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
    var myData = ""
    for(var i = 0; i < arr.length; i++ ){
        myData += arr[i].user + ": " + arr[i].comment + "<br/>";
    }
    document.getElementById("list").innerHTML = myData;
}

function addUser(){
    let first = document.getElementById('user').value;
    let last = document.getElementById('comment').value;

    if(http){
        http.open("GET","addComment.php?user="+first+"&comment="+last,true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
    }
}


document.getElementsByClassName("buttons").onload = checkUsers();