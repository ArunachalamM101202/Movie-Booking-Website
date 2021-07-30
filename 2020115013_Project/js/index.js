window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if(document.body.scrollTop>80 || document.documentElement.scrollTop > 100)
    {
        document.getElementById("a1").style.display ="none";
        // document.getElementById("a2").style.display ="none";
        document.getElementById("a3").style.display ="none";
        document.getElementById("a4").style.display ="none";
        document.getElementById("a5").style.display ="none";
        document.getElementById("hiddenlogotitle").style.display = "block";
    }
    else{
        document.getElementById("a1").style.display ="block";
        // document.getElementById("a2").style.display ="block";
        document.getElementById("a3").style.display ="block";
        document.getElementById("a4").style.display ="block";
        document.getElementById("a5").style.display ="block";
        document.getElementById("hiddenlogotitle").style.display = "none";
    }
    if(document.body.scrollTop>40 || document.documentElement.scrollTop > 100)
    {
        document.getElementById("side1").style.transform = "scale(1.5)";
        document.getElementById("side2").style.transform = "scale(1)";
        document.getElementById("side3").style.transform = "scale(1)";
        document.getElementById("side4").style.transform = "scale(1)";
        document.getElementById("side5").style.transform = "scale(1)";
    }
}

function selected(stringvar){
    document.getElementById(stringvar).style.color = "green";
    document.getElementsByClassName(stringvar)[0].setAttribute("checked","on");
}

function datetimeselect(some){
    document.getElementById("augone").style.backgroundColor = "white";
    document.getElementById("augone").style.color = "black";
    document.getElementById("augtwo").style.backgroundColor = "white";
    document.getElementById("augtwo").style.color = "black";
    document.getElementById("augthree").style.backgroundColor = "white";
    document.getElementById("augthree").style.color = "black";
    
    document.getElementsByClassName("augone")[0].checked = false;
    document.getElementsByClassName("augtwo")[0].checked = false;
    document.getElementsByClassName("augthree")[0].checked = false;

    document.getElementById(some).style.backgroundColor = "green";
    document.getElementById(some).style.color = "white";
    document.getElementsByClassName(some)[0].checked = true;
}

function add(somestr){
    if(document.getElementById(somestr).checked == false)
    {
    document.getElementById(somestr).setAttribute("checked","on");
    document.getElementsByClassName(somestr)[0].style.color = "white";
    document.getElementsByClassName(somestr)[0].style.backgroundColor = "green";
    document.getElementsByClassName(somestr)[0].innerHTML = "Selected";
    }
    else if(document.getElementById(somestr).checked == true){
        
    document.getElementById(somestr).checked = false;
    document.getElementsByClassName(somestr)[0].style.color = "black";
    document.getElementsByClassName(somestr)[0].style.backgroundColor = "rgb(202, 193, 193)";
    document.getElementsByClassName(somestr)[0].innerHTML = "Add";
    }
}

function mail(){
    alert("You are now subscribed to our newsletter");
}