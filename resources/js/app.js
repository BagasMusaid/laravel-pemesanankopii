import "./bootstrap";
import "flowbite";

window.onscroll = function () {
    const header = document.querySelector("nav");
    const fixelnav = header.offsetTop;

    if (window.pageYOffset > fixelnav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

let show = document.getElementById("iconshow");
let password = document.getElementById("password");

show.click = function () {
    if (password.type == "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
};
