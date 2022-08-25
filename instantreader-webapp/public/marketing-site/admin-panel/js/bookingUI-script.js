/*
This is the script for the event-booking UI.

Written by: edcabalda, rmhizon, & sclee
*/

// For disabling past dates
let curr_date = new Date().toISOString().split("T")[0];
$("#sect2-start-date").attr("min", curr_date);
$("#sect2-end-date").attr("min", curr_date);

// For showing date range
const showDateRange = () => {
    try {
        $("#sect2-days-into-future").val(""); // clears integer field
        $("#sect2-days-into-future").prop("disabled", true); // disable

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
        $("#sect2-days-into-future").prop("disabled", false); // enable

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

// For setting the minimum time of end-time
const disableEndTime = (id) => {
    const temp = id.split("_");
    const min = toTimeFormat(toMinutes($(`#${id}`).val()) + 15);
    $(`#${temp[0]}_end_${temp[2]}`).attr("min", min);
};

// Fot setting minimum date of end-date
const disableEndDate = () => {
    const start_date = $("#sect2-start-date").val();
    $("#sect2-end-date").attr("min", start_date);
};

// Add event handler
$("#sect2-start-date").change(disableEndDate);

// hide the clone pop-up and unchecks all input checkbox
$("#clone-popup").hide();
$(".calendar-checkbox").each(function () {
    $(this).prop("checked", false);
});

// jquery for toggling checkbox
$(".day-checkbox").change(function () {
    // if the checkbox is checked
    if ($(this).is(":checked")) {
        // the day is obtained and a timeslot is added based on the day
        let day = $(this).attr("id").split("-")[0];
        addTimeSlot(day + "-timeslots", day);

        // removes restrictions for the add and clone buttons
        $("#" + day + "-add").removeClass("disabled-button");
        $("#" + day + "-clone").removeClass("disabled-button");

        // if the checkbox is unchecked
    } else {
        // the day is obtained and the list of timeslots is obtained based on the day
        let day = $(this).attr("id").split("-")[0];
        let slot_list = document.getElementById(day + "-timeslots");
        let child = slot_list.lastElementChild;

        // delete all the children/timeslots from the list of timeslots
        while (child) {
            slot_list.removeChild(child);
            child = slot_list.lastElementChild;
        }

        // update timeslot status and disable the buttons again
        document.getElementById(day + "-status").innerHTML = "Unavailable";
        $("#" + day + "-add").addClass("disabled-button");
        $("#" + day + "-clone").addClass("disabled-button");
    }
});

// ------------- ADDING, DELETING, & CLONING TIMESLOTS start
// initializing variables
var sunday_count = 0;
var monday_count = 0;
var tuesday_count = 0;
var wednesday_count = 0;
var thursday_count = 0;
var friday_count = 0;
var saturday_count = 0;

function addTimeSlot(list_id, day) {
    // get the necessary variables
    if (day == "sunday") {
        num = sunday_count;
    } else if (day == "monday") {
        num = monday_count;
    } else if (day == "tuesday") {
        num = tuesday_count;
    } else if (day == "wednesday") {
        num = wednesday_count;
    } else if (day == "thursday") {
        num = thursday_count;
    } else if (day == "friday") {
        num = friday_count;
    } else {
        num = saturday_count;
    }

    // update status and checkbox
    document.getElementById(list_id.replace("timeslots", "status")).innerHTML =
        "";
    document.getElementById(
        list_id.replace("timeslots", "check")
    ).checked = true;

    // get the time slot list
    let slot_list = document.getElementById(list_id);

    // create the main time slot div
    let main_div = document.createElement("div");
    main_div.id = day + "_" + num;
    main_div.classList.add("mt-3");
    // create the timeslot start input field
    let timeslot_start = document.createElement("input");
    timeslot_start.id = day + "_start_" + num;
    timeslot_start.name = day + "_start_" + num;
    timeslot_start.classList.add(
        "rounded",
        "text-center",
        "timeslot-input",
        "me-3",
        "timeslot-start"
    );
    timeslot_start.type = "time";
    timeslot_start.required = "true";
    timeslot_start.onchange = () => disableEndTime(timeslot_start.id);
    main_div.appendChild(timeslot_start);
    // create the dash between the input field
    let dash = document.createElement("span");
    dash.textContent = "to";
    main_div.appendChild(dash);
    // create the timeslot end input field
    let timeslot_end = document.createElement("input");
    timeslot_end.id = day + "_end_" + num;
    timeslot_end.name = day + "_end_" + num;
    timeslot_end.classList.add(
        "rounded",
        "text-center",
        "timeslot-input",
        "ms-3",
        "timeslot-end"
    );
    timeslot_end.type = "time";
    timeslot_end.required = "true";
    main_div.appendChild(timeslot_end);
    // create the delete icon
    let delete_icon = document.createElement("i");
    delete_icon.classList.add("fas", "fa-trash-alt", "ms-3");
    delete_icon.setAttribute(
        "onclick",
        'deleteTimeSlot("' + list_id + '", "' + main_div.id + '")'
    );
    main_div.appendChild(delete_icon);

    // update necessary variables
    if (day == "sunday") {
        sunday_count += 1;
    } else if (day == "monday") {
        monday_count += 1;
    } else if (day == "tuesday") {
        tuesday_count += 1;
    } else if (day == "wednesday") {
        wednesday_count += 1;
    } else if (day == "thursday") {
        thursday_count += 1;
    } else if (day == "friday") {
        friday_count += 1;
    } else {
        saturday_count += 1;
    }

    // append the timeslot to the list
    slot_list.appendChild(main_div);
}

function deleteTimeSlot(list_id, slot_id) {
    // get the time slot list
    let slot_list = document.getElementById(list_id);
    // get the time slot to delete
    let timeslot = document.getElementById(slot_id);

    // delete the time slot
    slot_list.removeChild(timeslot);

    // if the slot list is empty set status to unavailable, uncheck, and disable the buttons
    if (slot_list.childNodes.length == 0) {
        document.getElementById(
            list_id.replace("timeslots", "status")
        ).innerHTML = "Unavailable";
        document.getElementById(
            list_id.replace("timeslots", "check")
        ).checked = false;
        $("#" + list_id.replace("timeslots", "add")).addClass(
            "disabled-button"
        );
        $("#" + list_id.replace("timeslots", "clone")).addClass(
            "disabled-button"
        );
    }
}

function openPopup(list_id) {
    // show the popup and pass some parameters
    $("#clone-popup").show();
    $("#clone-popup").data("list_id", list_id).dialog();

    // removes all x icons before adding another one
    $(".ui-dialog-titlebar-close").each(function () {
        if ($(this).children()) {
            $("#popup-close").remove();
        }
    });
    $(".ui-dialog-titlebar-close").append(
        '<i id="popup-close"class="fas fa-times"></i>'
    );
}

function cloneSchedule() {
    let list_id = $("#clone-popup").data("list_id");
    $(".clone_day:checkbox:checked").each(function () {
        // only proceed if the target day is NOT same as source day
        if ($(this).attr("value") != list_id) {
            // get the old day from source list and the new days for destination list
            let old_day = list_id.split("-")[0];
            let new_day = $(this).attr("value").split("-")[0];

            // get the necessary variables
            if (new_day == "sunday") {
                num = sunday_count;
            } else if (new_day == "monday") {
                num = monday_count;
            } else if (new_day == "tuesday") {
                num = tuesday_count;
            } else if (new_day == "wednesday") {
                num = wednesday_count;
            } else if (new_day == "thursday") {
                num = thursday_count;
            } else if (new_day == "friday") {
                num = friday_count;
            } else {
                num = saturday_count;
            }

            // get target list
            let target_slot_list = document.getElementById(
                $(this).attr("value")
            );

            // iterate through all the time slots
            for (const timeslot of document.getElementById(list_id)
                .childNodes) {
                // check if values for times exist
                if (
                    timeslot.childNodes[0].value == "" ||
                    timeslot.childNodes[2].value == ""
                ) {
                    continue;
                }

                // check if the schedules are a duplicate
                let duplicate = false;
                for (const target_timeslot of document.getElementById(
                    $(this).attr("value")
                ).childNodes) {
                    if (
                        timeslot.childNodes[0].value ==
                            target_timeslot.childNodes[0].value &&
                        timeslot.childNodes[2].value ==
                            target_timeslot.childNodes[2].value
                    ) {
                        duplicate = true;
                    }
                }
                if (duplicate) {
                    continue;
                }

                // update status of timeslot
                document.getElementById(
                    $(this).attr("value").replace("timeslots", "status")
                ).innerHTML = "";
                document.getElementById(
                    $(this).attr("value").replace("timeslots", "check")
                ).checked = true;

                // removes restrictions for the add and clone buttons
                $("#" + new_day + "-add").removeClass("disabled-button");
                $("#" + new_day + "-clone").removeClass("disabled-button");

                // create the main div
                let main_div = document.createElement("div");
                main_div.id = new_day + "_" + num;
                main_div.classList.add("mt-3");

                // iterate through all the child nodes
                for (const child of timeslot.childNodes) {
                    let clone = child.cloneNode();
                    if (clone.id) {
                        clone.id =
                            new_day + "_" + clone.id.split("_")[1] + "_" + num;
                        clone.name =
                            new_day +
                            "_" +
                            clone.name.split("_")[1] +
                            "_" +
                            num;
                        main_div.appendChild(clone);
                        continue;
                    }
                    if (clone.onclick) {
                        clone.setAttribute(
                            "onclick",
                            'deleteTimeSlot("' +
                                $(this).attr("value") +
                                '", "' +
                                main_div.id +
                                '")'
                        );
                        main_div.appendChild(clone);
                        continue;
                    }
                    if (clone.tagName == "SPAN") {
                        let dash = document.createElement("span");
                        dash.textContent = "to";
                        main_div.appendChild(dash);
                        continue;
                    }
                }
                target_slot_list.appendChild(main_div);
                num += 1;
            }

            // update count
            if (new_day == "sunday") {
                sunday_count = num;
            } else if (new_day == "monday") {
                monday_count = num;
            } else if (new_day == "tuesday") {
                tuesday_count = num;
            } else if (new_day == "wednesday") {
                wednesday_count = num;
            } else if (new_day == "thursday") {
                thursday_count = num;
            } else if (new_day == "friday") {
                friday_count = num;
            } else {
                saturday_count = num;
            }
        }
    });

    // close the dialog and uncheck the options
    $("#clone-popup").dialog("close");
    $(".clone_day").each(function () {
        $(this).prop("checked", false);
    });

    // alert('Schedule cloned'); // temporarily removed for faster response to user
}
// ------------- ADDING, DELETING, & CLONING TIMESLOTS end
