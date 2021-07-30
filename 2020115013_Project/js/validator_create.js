// Create user Form validator
function validateform(){
    let x = document.forms["newuserform"]["name"].value;
    if(x=="")
    {
        alert("Name field cannot be left empty");
    }
    let y = document.forms["newuserform"]["gender"].value;
    if(y=="")
    {
        alert("Please select some gender");
    }
    let z = document.forms["newuserform"]["phoneno"].value;
    if(z=="")
    {
        alert("Phone number field cannot be left empty");
    }
    let a = document.forms["newuserform"]["email"].value;
    if(a=="")
    {
        alert("Email field cannot be left empty");
    }
    let b = document.forms["newuserform"]["city"].value;
    if(b=="")
    {
        alert("Enter the name of the city you reside in");
    }
    let c = document.forms["newuserform"]["username"].value;
    if(c=="")
    {
        alert("Username field cannot be left empty");
    }
    let d = document.forms["newuserform"]["password"].value;
    if(d=="")
    {
        alert("Password field cannot be left empty");
    }
    let e = document.forms["newuserform"]["confirmpassword"].value;
    if(e=="")
    {
        alert("Confirm Password field cannot be left empty");
    }
    k=0;
    for(i=0;i<x.length;i++)
    {
        if((x[i]>="A" && x[i]<="Z")||(x[i]>="a" && x[i]<="z")||x[i]==" "||k!=0)
        continue;
        else{
            alert("Name cannot have any Special characters");
            k=1;
        }
    }
    l=0;
    for(i=0;i<z.length;i++)    
    {
        if((z[i]>="0" && z[i]<="9" && z.length==10)||l!=0)
        continue;
        else{
            alert("Please enter a valid phone number");
            l=1;
        }
    }
    m = 0;
    for(i=0;i<c.length;i++)
    {
        if((c[i]>="A" && c[i]<="Z")||(c[i]>="a" && c[i]<="z")||c[i]==" "||m!=0||c[i]=="_"||((c[i]>="0" && c[i]<="9")))
        continue;
        else{
            alert("Username can contain only letters,numbers or an underscore");
            m=1;
        }
    }   
    checker=0;
    aa=0;
    bb=0;
    cc=0;
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
    }
    if(d.length>20)
    {
        alert("Your Password is too long");
    }
    if(d!=e)
    {
        alert("The Passwords don't match");
    }
}