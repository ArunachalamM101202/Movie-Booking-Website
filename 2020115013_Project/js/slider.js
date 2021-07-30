counter = 1;
function slider(i){
    counter =counter+i;
    
    if(counter==1)
    {
        document.getElementById("photo1").style.display = "block";
        document.getElementById("photo2").style.display = "none";
        document.getElementById("photo3").style.display = "none";
    }
    else if(counter==2)
    {
        document.getElementById("photo1").style.display = "none";
        document.getElementById("photo2").style.display = "block";
        document.getElementById("photo3").style.display = "none";
    }
    else if(counter==3)
    {
        document.getElementById("photo1").style.display = "none";
        document.getElementById("photo2").style.display = "none";
        document.getElementById("photo3").style.display = "block";
    }
    else if(counter>3)
    {
        counter=0;
    }
    else{
        counter=4;
    }
}
setInterval(function(){ slider(1); }, 7500);