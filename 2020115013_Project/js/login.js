k=0;
    setInterval(function(){ 
        if(k==0)
        {
            document.getElementById("logone").style.display = "block";
            document.getElementById("logtwo").style.display = "none";
            document.getElementById("logthree").style.display = "none";
            k=k+1;
        }
        else if(k==1){
            document.getElementById("logone").style.display = "none";
            document.getElementById("logtwo").style.display = "block";
            document.getElementById("logthree").style.display = "none";
            k=k+1;
        }
        else{
            document.getElementById("logone").style.display = "none";
            document.getElementById("logtwo").style.display = "none";
            document.getElementById("logthree").style.display = "block";
            k=0;
        }
            },5000);