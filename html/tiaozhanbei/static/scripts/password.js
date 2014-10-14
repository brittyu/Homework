if (window.addEventListener) {
    window.addEventListener("load", setupEvent, false);
} else if (window.attachEvent) {
    window.attachEvent("onload", setupEvent);
} else {
    window.onload=setupEvent;
}

function setupEvent(evnt) {
    document.getElementById("conf_pw").onchange=validationPassword;
}

function validationPassword() {
    var new_password=document.getElementById("new_pw").value;
    var conf_password=document.getElementById("conf_pw").value;

    if (new_password!==conf_password)
        document.getElementById("validation").innerHTML="密码不一致";
    else if ((new_password==""&&conf_password=="")||new_password==conf_password)
        document.getElementById("validation").innerHTML="";
}
