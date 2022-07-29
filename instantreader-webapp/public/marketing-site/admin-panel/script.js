/*
    This is the javascript for the admin panel.

    by: rmhizon
*/

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

// for counting current characters in description editor
let description_editor = document.getElementById("description-editor");
let desc_char_counter = document.getElementById(
    "description-editor-char-counter"
);
const maxDesc = 155; // maximum character count for description

const getCurrentDescCount = () => {
    let curr = description_editor.value.length; // number of characters in the editor
    if (curr === maxDesc) {
        desc_char_counter.style.color = "#FF6363";
    } else {
        desc_char_counter.style.color = "#595C5F";
    }
    desc_char_counter.textContent = curr + "/" + maxDesc;
};

// for counting current characters in title editor
let title_editor = document.getElementById("title-editor");
let title_char_counter = document.getElementById("title-editor-char-counter");
const maxTitle = 60; // maximum character count for title

const getCurrentTitleCount = () => {
    let curr = title_editor.value.length; // number of characters in the editor
    if (curr === maxTitle) {
        title_char_counter.style.color = "#FF6363";
    } else {
        title_char_counter.style.color = "#595C5F";
    }
    title_char_counter.textContent = curr + "/" + maxTitle;
};

// add event handlers
description_editor.addEventListener("input", getCurrentDescCount);
title_editor.addEventListener("input", getCurrentTitleCount);
