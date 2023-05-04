const buttons = document.querySelectorAll("a");
buttons.forEach((button) => {
    button.onclick = function (e) {
        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;
        let ripple = document.createElement("span");
        ripple.style.left = '${x}px';
        ripple.style.top = '${y}px';
        this.appendChild(ripple);
        setTimeout(function () {
            ripple.remove();
        }, 600);
    }

});
function myFunction(x) {
    x.style.background = "#D6EAF8";
}
function validation() {
    var valid = true;
    formLabels = document.getElementsByTagName("label");
    var username = document.regForm.username.value;
    var usernameRegex = /^[a-zA-Z0-9]+$/;


    if (username == "") {
        formLabels[0].innerHTML = "Username : * [Required]";
        valid = false;

    }
    else if (username == usernameRegex) {
        valid = true;
    }
    var password = document.regForm.password.value;
    if (password == "") {
        formLabels[3].innerHTML = "Passowrd : * [Required]";
        valid = (valid) ? true : false;
    }
    else {

    }


    return valid;

}