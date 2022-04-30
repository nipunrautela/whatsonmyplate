function checkMail(mail) {
    var re=/^[a-zA-Z0-9%_\.]@[a-z]+[\.a-z]+/;
    if(mail.value.match(re))
        return true;
    else
        return false;
}

function checkPassword(pass) {
    var re=/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    if(pass.value.match(re))
        return true;
    return false;    
}

function checkName(name) {
    var re=/^[A-Za-z][A-Za-z0-9_]{7,29}$/;
    if(name.value.match(re)) {
        return true;
    }
    return false;
}

