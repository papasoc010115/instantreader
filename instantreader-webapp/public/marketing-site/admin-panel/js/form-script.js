/*
    This is the script that handles the forms in the admin panel.

    by: rmhizon & sclee
*/

const infoGetter = (el) => {
    switch (el.dataset.fieldtype) {
        case "big":
        case "default":
            return el.value
                .replace(/\s+/g, " ") // removes whitespaces in between words
                .replace(/^\s+|\s+$/g, ""); // removes whitespaces at the start and at the end of the string

        case "tiny":
            return tinymce
                .get(el.id)
                .getContent()
                .replace(/<p>/g, "")
                .replace(/<\/p>/g, "");
        default:
            console.log("Unknown fieldtype");
    }
};

// Function for checking if input is all whitespaces only
const isEmpty = (str, type) => {
    if (type === "big" || type === "default") {
        // remove whitespaces
        str = str.replace(/\s/g, "");
    } else if (type === "tiny") {
        // remove whitespaces
        str = str
            .replace(/\s/g, "")
            .replace(/<p>/g, "")
            .replace(/<\/p>/g, "")
            .replace(/<div>/g, "")
            .replace(/<\/div>/g, "")
            .replace(/\&nbsp;/g, "");
    }
    if (str.length === 0) {
        // if all characters were whitespaces
        return true;
    }
    return false;
};

// Function for sending POST request
const ajaxPOST = (api_route, update_data, asyncBool, success_msg) => {
    // AJAX setup
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // Send POST request to server
    $.ajax({
        url: api_route,
        method: "POST",
        data: update_data,
        async: asyncBool,
        success: function (response) {
            alert(success_msg);
        },
        error: function (error) {
            // alert("Update Failed. Contact your admin.");
            console.log(error);
        },
    });
};

// non-media and non-FAQ forms
const forms = $(".non-media").get();
for (let i = 0; i < forms.length; i++) {
    const form = forms[i];
    form.addEventListener("submit", (e) => {
        e.preventDefault(); // prevents page from refreshing
        const api_route = form.dataset.route; // api endpoint
        const input_element = form.children[1].children[1];
        let update_data = {
            name: input_element.name,
            value: infoGetter(input_element),
        };

        if (isEmpty(update_data.value, input_element.dataset.fieldtype)) {
            alert("Empty field not allowed!");
        } else {
            ajaxPOST(api_route, update_data, true, "Successfully Updated!");
        }
    });
}

// FAQ form
const faqs = $(".faq").get();
for (let i = 0; i < faqs.length; i++) {
    const faq = faqs[i];
    faq.addEventListener("submit", (e) => {
        e.preventDefault(); // prevents page from refreshing
        const api_route = faq.dataset.route; // api endpoint
        const q = faq.children[1].children[1];
        const a = faq.children[1].children[3];
        let update_data = {
            question: infoGetter(q),
            answer: infoGetter(a),
        };

        if (
            isEmpty(q.value, q.dataset.fieldtype) ||
            isEmpty(a.value, a.dataset.fieldtype)
        ) {
            alert("Empty field not allowed!");
        } else {
            ajaxPOST(api_route, update_data, false, "Successfully Updated!");
            location.reload();
        }
    });
}

// FAQ Delete
const deleteFaqBtn = $(".delete-faq").get();
for (let i = 0; i < deleteFaqBtn.length; i++) {
    const btn = deleteFaqBtn[i];
    btn.addEventListener("click", (e) => {
        const api_route = btn.dataset.route;
        const faq_id = btn.dataset.faq_id; // FAQ to delete
        const data = { id: faq_id };
        console.log(faq_id);
        ajaxPOST(api_route, data, false, "Successfully Deleted!");
        location.reload();
    });
}

// FAQ Update
const updateFAQ = $(".update-faq").get();
for (let i = 0; i < updateFAQ.length; i++) {
    const faq = updateFAQ[i];
    faq.addEventListener("submit", (e) => {
        e.preventDefault();
        const api_route = faq.dataset.route;
        const q = faq.children[1].children[1];
        const a = faq.children[1].children[3];
        let update_data = {
            id: faq.dataset.faq_id,
            question: infoGetter(q),
            answer: infoGetter(a),
        };

        if (
            isEmpty(q.value, q.dataset.fieldtype) ||
            isEmpty(a.value, a.dataset.fieldtype)
        ) {
            alert("Empty field not allowed!");
        } else {
            ajaxPOST(api_route, update_data, false, "Successfully Updated!");
            location.reload();
        }
    });
}

// For Booking Forms

// Event Class
class Event {
    constructor(type, date, start_time, end_time, slots) {
        this.type = type;
        this.date = date;
        this.start_time = start_time;
        this.this.end_time = end_time;
        this.slots = slots;
    }
}

// Functions
const showDateRange = () => {
    try {
        $("#sect2-start-end-date").removeClass("removed");
        $("#sect2-days-into-future").prop("required", false);

        $("#sect2-start-date").prop("required", true);
        $("#sect2-end-date").prop("required", true);
    } catch {}
};

const hideDateRange = () => {
    try {
        $("#sect2-start-end-date").addClass("removed");
        $("#sect2-days-into-future").prop("required", true);

        $("#sect2-start-date").prop("required", false);
        $("#sect2-end-date").prop("required", false);
    } catch {}
};

// Add Event Handlers
$("#sect2-event-range1").click(hideDateRange);
$("#sect2-event-range2").click(showDateRange);
