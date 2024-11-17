let imageArray = new Array();
let imgRecord = 0;
let caption = "";

document.getElementById("imgHolder").onload = createArray();


function createArray(){
    console.log("TEST");
   imageArray=document.getElementById("imgHolder").getElementsByTagName("img");
   document.getElementById("cap").innerHTML = imageArray[imgRecord].alt;
}


function changeImg(dom,x){
    console.log(imageArray);
    document.getElementById("bigPic").src = dom.src;
    document.getElementById("cap").innerHTML = dom.alt;
    console.log("before the class is "+dom.class);

  
      
    checkActive();
  
    
    imgRecord = x;
    imageArray[imgRecord].className += " active";
}

function checkActive(){
    for(let i=0;i<imageArray.length;i++){
        imageArray[i].className=imageArray[i].className.replace(" active","");
    }
}


function moveImg(x){
   
    if(imgRecord<=0 && x<1 ){
        imgRecord=5;
    }
    else if(imgRecord<6){
        imgRecord+=x; 
    }
    
    if(imgRecord>=6){
        imgRecord=0;
    }
   
    console.log(imgRecord);
    console.log(imageArray[imgRecord].alt);
    document.getElementById("bigPic").src = imageArray[imgRecord].src;
    document.getElementById("cap").innerHTML = imageArray[imgRecord].alt;
    checkActive();
    imageArray[imgRecord].className += " active";

    //document.getElementById("cap").innerHTML = imageArray[imgRecord].alt;
    //need to createa an array of alts
}