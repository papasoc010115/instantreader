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
            alert("Unknown fieldtype");
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

// EventCard Class
class EventCard {
    constructor(event_name, date, start_time, end_time, slots) {
        this.event_name = event_name;
        this.date = date;
        this.start_time = start_time;
        this.this.end_time = end_time;
        this.slots = slots;
    }
}

// Functions
// For showing date range
const showDateRange = () => {
    try {
        $("#sect2-days-into-future").val(""); // clears integer field

        $("#sect2-start-end-date").removeClass("removed");
        $("#sect2-days-into-future").prop("required", false);

        $("#sect2-start-date").prop("required", true);
        $("#sect2-end-date").prop("required", true);
    } catch (e) {
        throw e;
    }
};

// For hiding date range
const hideDateRange = () => {
    try {
        $("#sect2-start-date").val(""); // clears value when hidden
        $("#sect2-end-date").val(""); // clears value when hidden

        $("#sect2-start-end-date").addClass("removed");
        $("#sect2-days-into-future").prop("required", true);

        $("#sect2-start-date").prop("required", false);
        $("#sect2-end-date").prop("required", false);
    } catch (e) {
        throw e;
    }
};

// Add Event Handlers
$("#sect2-event-range1").click(hideDateRange);
$("#sect2-event-range2").click(showDateRange);

// Function for getting all the dates (from custom range or from number input)
const getDates = () => {
    try {
        let dates = [];
        const selected = $('input[name="event-range"]:checked').val();

        if (selected === "int") {
            let number = $("#sect2-days-into-future").val();
            if (isNaN(number)) {
                alert("Invalid number of days.");
                return;
            }
            number = Number(number);
            const isInteger = Number.isInteger(number);
            if (!isInteger || number <= 0) {
                alert("Invalid number of days.");
                return;
            }

            for (let i = 1; i <= number; i++) {
                const tempDate = new Date();
                tempDate.setDate(tempDate.getDate() + i);
                dates.push(tempDate);
            }
        } else {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            const startDate = new Date($("#sect2-start-date").val());
            const endDate = new Date($("#sect2-end-date").val());

            if (startDate > endDate || startDate < today) {
                alert("Invalid date range.");
                return;
            }

            const time = endDate - startDate; //time between in milliseconds
            const numOfDays = time / (1000 * 3600 * 24); //days between dates

            for (let i = 0; i <= numOfDays; i++) {
                const tempDate = new Date(startDate);
                tempDate.setDate(tempDate.getDate() + i);
                dates.push(tempDate);
            }
        }
        return dates;
    } catch (e) {
        throw e;
    }
};

// Function for getting availability

// Function for generating EventCard instances
const generateEvent = () => {
    // let events = []; // will be returned
    // const availability = getAvailability();
    const dates = getDates();
    for (let i = 0; i < dates.length; i++) {
        // events.push(makeEvent(dates[i], availability));
    }
    // return events;
};

// TODO: add generateEvent function onSubmit of form
$("#dateRange-btn-test").click(() => {
    console.log(getDates());
});
