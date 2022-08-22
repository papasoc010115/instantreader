/*
    This is the javascript for the admin panel.

    by: rmhizon
*/

// for counting current characters in title editor
let title_editor = document.getElementById("title-editor");
let title_char_counter = document.getElementById("title-editor-char-counter");

// for counting current characters in description editor
let description_editor = document.getElementById("description-editor");
let desc_char_counter = document.getElementById(
    "description-editor-char-counter"
);
const maxDesc = 155; // maximum character count for description
const maxTitle = 60; // maximum character count for title

// counter function
const getCurrentDescCount = () => {
    let curr = description_editor.value.length; // number of characters in the editor
    desc_char_counter.textContent = curr + "/" + maxDesc;
    if (curr === maxDesc) {
        desc_char_counter.style.color = "#FF6363";
    } else {
        desc_char_counter.style.color = "#595C5F";
    }
};

// counter function
const getCurrentTitleCount = () => {
    let curr = title_editor.value.length; // number of characters in the editor
    title_char_counter.textContent = curr + "/" + maxTitle;
    if (curr === maxTitle) {
        title_char_counter.style.color = "#FF6363";
    } else {
        title_char_counter.style.color = "#595C5F";
    }
};

// add event handlers
description_editor.addEventListener("input", getCurrentDescCount);
title_editor.addEventListener("input", getCurrentTitleCount);

// for setting initial active nav link and counters
window.onload = function () {
    try {
        getCurrentTitleCount();
        getCurrentDescCount();
        var current = document.getElementsByClassName("active"); // get current active class
        if (current.length > 0) {
            if (!current[0].className.includes("carousel-item")){
                current[0].className = current[0].className.replace(" active", ""); // remove current active class
            }
        }

        var path = window.location.pathname; // current path
        if (path === "/admin/home") {
            document.getElementById("home-link").classList.add("active");
        } else if (path.includes("/admin/learn-more")) {
            document.getElementById("learn-more-link").classList.add("active");
        } else if (path.includes("/admin/contact-us")) {
            document.getElementById("contact-us-link").classList.add("active");
        } else if (path.includes("/admin/about-us")) {
            document.getElementById("about-us-link").classList.add("active");
        } else if (path.includes("/admin/additional-resources")) {
            document
                .getElementById("additional-resources-link")
                .classList.add("active");
        }
    } catch {}
};
