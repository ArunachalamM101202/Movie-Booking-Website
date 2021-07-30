function validateform(){
    let x = document.forms["changeform"]["password"].value;
    if(x=="")
    {
        alert("Password Field cannot be left Empty");
        
    }
    let y = document.forms["changeform"]["confirmpassword"].value;
    if(y=="")
    {
        alert("Confirm Password Field cannot be left Empty")
    }
    checker=0;
    aa=0;
    bb=0;
    cc=0;
    d = x;
    e = y;
    for(i=0;i<d.length;i++)
    {
        if(d[i]>="a" && d[i]<="z" && aa==0)
        {
            checker=checker+1;
            aa=1;
            continue;
        }
        if(d[i]>="A" && d[i]<="Z" && bb==0)
        {
            checker=checker+1;
            bb=1;
            continue;
        }
        if(d[i]>="0" && d[i]<="9" && cc==0)
        {
            checker=checker+1;
            cc=1;
            continue;
        }
    }
    if(checker<3 || d.length<5)
    {
        alert("Password is not strong enough.Ensure that your password is atleast 5 characters long has atleast one lowercase,one uppercase character and a digit");
        window.location.replace('../index/index.php');
    }
    if(d.length>20)
    {
        alert("Your Password is too long");
        window.location.replace('../index/index.php');
    }
    if(d!=e)
    {
        alert("The Passwords don't match");
        window.location.replace('../index/index.php');
    }
}