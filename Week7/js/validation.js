function validateRegisterForm()
{
    let fullname =
        document.getElementById(
        "fullname").value;

    let email =
        document.getElementById(
        "email").value;

    let password =
        document.getElementById(
        "password").value;

    if(fullname.trim() === "")
    {
        alert("Full Name Required");
        return false;
    }

    if(password.length < 8)
    {
        alert(
        "Password must be at least 8 characters");
        return false;
    }

    return true;
}

function checkPasswordStrength()
{
    let password =
        document.getElementById(
        "password").value;

    let strength =
        document.getElementById(
        "strength");

    if(password.length < 6)
    {
        strength.innerHTML =
        "<span style='color:red'>Weak Password</span>";
    }
    else if(password.length < 10)
    {
        strength.innerHTML =
        "<span style='color:orange'>Medium Password</span>";
    }
    else
    {
        strength.innerHTML =
        "<span style='color:green'>Strong Password</span>";
    }
}

function validateLoginForm()
{
    let email =
        document.getElementById(
        "login_email").value;

    let password =
        document.getElementById(
        "login_password").value;

    if(email === "")
    {
        alert("Enter Email");
        return false;
    }

    if(password === "")
    {
        alert("Enter Password");
        return false;
    }

    return true;
}