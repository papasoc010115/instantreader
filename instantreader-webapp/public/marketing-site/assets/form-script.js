// Function for sending POST request
const ajaxPOST = (api_route, update_data, success_msg) => {
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
        success: function (response) {
            alert(success_msg);
        },
        error: function (error) {
            alert("Something went wrong. Contact your IT admin.");
            console.log(error);
        },
    });
};

const booking_forms = $(".assessment-form").get();
for (let i = 0; i < booking_forms.length; i++) {
    const booking_form = booking_forms[i];

    booking_form.addEventListener("submit", (e) => {
        e.preventDefault();

        const api_route = booking_form.dataset.route;
        const update_data = {
            id: booking_form[1].value,

            parent_first_name: booking_form[2].value,
            parent_last_name: booking_form[6].value,

            student_first_name: booking_form[3].value,
            student_last_name: booking_form[7].value,
            student_age: booking_form[9].value,

            contact_number: booking_form[4].value,
            email: booking_form[8].value,
            city_country: booking_form[5].value,

            captcha: booking_form[10].value,
        };

        ajaxPOST(api_route, update_data, false, "Successfully Updated!");
    });
}
