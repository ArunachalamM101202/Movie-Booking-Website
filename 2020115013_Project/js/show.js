window.onscroll = function() {showonscroll()};

function showonscroll(){
    if(document.body.scrollTop>150 || document.documentElement.scrollTop > 100)
    {
        document.getElementById("goldmember").style.display = "block";
        document.getElementById("goldmember").style.transition = "1s ease-in";
    }
    if(document.body.scrollTop>750 || document.documentElement.scrollTop > 600)
    {
        document.getElementById("silvermember").style.display = "block";
        document.getElementById("silvermember").style.transition = "1s ease-in";
    }
}
