/*global window*/
/*global document*/

var header = document.getElementById("site-nav");

var sticky = header.offsetTop;

function myFunction() {
    "use strict";
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky-nav");
    } else {
        header.classList.remove("sticky-nav");
    }
}

window.onscroll = function () {
    "use strict";
    myFunction();
};
