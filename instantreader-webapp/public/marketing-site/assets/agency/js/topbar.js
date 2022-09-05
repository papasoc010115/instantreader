/*
    This is the javascript for the topbar.

    by: rmhizon
*/

// for setting initial active nav link
window.onload = function () {
    try {
        var current = document.getElementsByClassName("active-navlink"); // get current active class
        if (current.length > 0) {
            current[0].className = current[0].className.replace(
                " active-navlink",
                ""
            ); // remove current active class
        }

        var path = window.location.pathname; // current path
        if (path === "/") {
            document
                .getElementById("home-link")
                .classList.add("active-navlink");
        } else if (path.includes("/learn-more")) {
            document.getElementById("lm-link").classList.add("active-navlink");
        } else if (path.includes("/contact-us")) {
            document.getElementById("cu-link").classList.add("active-navlink");
        }
    } catch {}
};
