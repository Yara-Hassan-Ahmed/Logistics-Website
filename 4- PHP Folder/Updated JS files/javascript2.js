const buttons = document.querySelectorAll("a");
buttons.forEach((button) => {
    button.onmouseenter = function (e) {
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
function MouseOver(x) {
    x.style.background = "rgba(77, 161, 218,0.23)";

}
function MouseOut(x) {
    x.style.background = "rgb(8, 48, 75)";
}
