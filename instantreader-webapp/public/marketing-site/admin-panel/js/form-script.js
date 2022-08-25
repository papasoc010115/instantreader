/*
    This is the script that handles the forms in the admin panel.

    by: rmhizon & sclee
*/

/* FOR TEXT INPUT (NON_FAQ) AND TEXTAREA FUNCTIONALITY */

// Function for getting the value from input(text)/textarea
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
            alert("Something went wrong. Contact your IT admin.");
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

/* FOR FAQ FUNCTIONALITY */

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

/* FOR INDIVIDUAL TESTIMONIAL */

// Testimonial Delete
const deleteIndividualTestimonialBtn = $(
    ".delete-individual-testimonial"
).get();
for (let i = 0; i < deleteIndividualTestimonialBtn.length; i++) {
    const btn = deleteIndividualTestimonialBtn[i];
    btn.addEventListener("click", (e) => {
        const api_route = btn.dataset.route;
        const individual_testimonial_id = btn.dataset.individual_testimonial_id; // FAQ to delete
        const data = { id: individual_testimonial_id };
        ajaxPOST(api_route, data, false, "Successfully Deleted!");
        location.reload();
    });
}

/* FOR BOOKING FORM'S FUNCTIONALITY */

// EventCard Class
class EventCard {
    constructor(event_name, date, start_time, end_time, slots) {
        this.event_name = event_name;
        this.date = date;
        this.start_time = start_time;
        this.end_time = end_time;
        this.slots = slots;
    }
}
// Function for converting int to day
const intToDay = (i) => {
    switch (i) {
        case 0:
            return "sunday";
        case 1:
            return "monday";
        case 2:
            return "tuesday";
        case 3:
            return "wednesday";
        case 4:
            return "thursday";
        case 5:
            return "friday";
        case 6:
            return "saturday";
        default:
            return "error";
    }
};

// Function for getting all the dates (from custom range or from number input)
const getDates = () => {
    try {
        let dates = [];
        const selected = $('input[name="event-range"]:checked').val();

        if (selected === "int") {
            let number = Number($("#sect2-days-into-future").val());

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
const getAvailability = () => {
    try {
        let start_time = $(".timeslot-start");
        let availability = [];

        // create & push objects
        for (let i = 0; i < start_time.length; i++) {
            const curr = start_time[i];
            const str = curr.id.split("_");
            const obj = {
                day: str[0],
                start_time: curr.value,
                end_time: $(`#${str[0]}_end_${str[2]}`).val(),
            };
            availability.push(obj);
        }
        return availability;
    } catch (e) {
        throw e;
    }
};

// Function for converting time (h:m) to minutes
const toMinutes = (t) => {
    const temp = t.split(":");
    return Number(temp[0]) * 60 + Number(temp[1]);
};

// Function for converting minutes to time (h:m)
const toTimeFormat = (m) => {
    const hour = Math.floor(m / 60);
    const minutes = m % 60;

    return `${hour}:${minutes >= 10 ? minutes : "0" + minutes.toString()}`;
};

// Function for converting Date object to date-only string
const toDateOnlyFormat = (date) => {
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    return `${
        months[date.getMonth()]
    } ${date.getDate()}, ${date.getFullYear()}`;
};

// Function for making Event cards
const makeEvent = (name, date, availability) => {
    try {
        const day = intToDay(date.getDay());
        const duration = Number($("#sect2-duration-value").val());
        const interval = Number($("#sect2-event-interval").val());
        let events = [];
        for (let i = 0; i < availability.length; i++) {
            const obj = availability[i];
            if (obj.day != day) continue;
            let start = toMinutes(obj.start_time);
            const end = toMinutes(obj.end_time);
            while (start < end) {
                // create event
                if (start + duration > end) break;
                const event = new EventCard(
                    name,
                    toDateOnlyFormat(date),
                    toTimeFormat(start),
                    toTimeFormat(start + duration),
                    Number($("#sect2-slots").val())
                );
                // store event
                events.push(event);
                start += duration + interval;
            }
        }
        return events;
    } catch (e) {
        throw e;
    }
};

// Function for generating EventCard instances
const generateEvents = (eventType) => {
    try {
        let events = []; // will be returned
        const availability = getAvailability();
        const dates = getDates();
        for (let i = 0; i < dates.length; i++) {
            let temp;
            temp = makeEvent(eventType, dates[i], availability);
            events = events.concat(temp);
        }
        return events;
    } catch (e) {
        throw e;
    }
};

// Function for checking input fields
const eventFormChecker = () => {
    const selected = $('input[name="event-range"]:checked').val();

    if (selected === "int") {
        let numberOfDays = $("#sect2-days-into-future").val();
        if (isNaN(numberOfDays)) {
            alert("Invalid number of days.");
            return false;
        }
        numberOfDays = Number(numberOfDays);
        let isInteger = Number.isInteger(numberOfDays);
        if (!isInteger || numberOfDays <= 0) {
            alert("Invalid number of days.");
            return false;
        }
    }

    let numberOfSlots = $("#sect2-slots").val();
    if (isNaN(numberOfSlots)) {
        alert("Invalid number of slots.");
        return false;
    }
    numberOfSlots = Number(numberOfSlots);
    isInteger = Number.isInteger(numberOfSlots);
    if (!isInteger || numberOfSlots <= 0) {
        alert("Invalid number of slots.");
        return false;
    }

    return true;
};

// SUBMIT SCHEDULE
$("#sect2-schedule-form").on("submit", (e) => {
    try {
        e.preventDefault();
        const valid = eventFormChecker();
        if (valid) {
            const eventCards = generateEvents(
                $("#sect2-schedule-form").data("eventtype")
            );
            if (eventCards.length === 0) {
                alert("No events were created/updated. Check your inputs.");
                return;
            }
            const api_route = $("#sect2-schedule-form").data("route");
            ajaxPOST(
                api_route,
                { data: JSON.stringify(eventCards) },
                true,
                "Success!"
            );
        }
    } catch (e) {
        alert("Something went wrong. Contact your IT admin.");
        // console.log(e); // for debugging purposes
    }
});
