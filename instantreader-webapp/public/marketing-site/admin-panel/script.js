// for setting initial active nav link
window.onload = function () {
    try {
        var current = document.getElementsByClassName("active"); // get current active class
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", ""); // remove current active class
        }

        var path = window.location.pathname; // current path
        switch (path) {
            case "/admin/home":
                document.getElementById("home-link").classList.add("active");
                break;
            case "/admin/learn-more":
                document
                    .getElementById("learn-more-link")
                    .classList.add("active");
                break;
            case "/admin/contact-us":
                document
                    .getElementById("contact-us-link")
                    .classList.add("active");
                break;
            case "/admin/about-us":
                document
                    .getElementById("about-us-link")
                    .classList.add("active");
                break;
            case "/admin/additional-resources":
                document
                    .getElementById("additional-resources-link")
                    .classList.add("active");
                break;
        }
    } catch {}
};
