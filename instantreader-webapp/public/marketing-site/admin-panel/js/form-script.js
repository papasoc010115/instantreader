/*
    This is the script that handles the forms in the admin panel.

    by: rmhizon & sclee
*/

const forms = $("form").get();
for (let i = 0; i < forms.length; i++) {
    const form = forms[i];
    form.addEventListener("submit", (e) => {
        e.preventDefault(); // prevents page from refreshing
        const api_route = form.dataset.route; // api endpoint
        const input_element = form.children[1].children[1];
        let update_data = {
            name: input_element.name,
            value:
                input_element.dataset.fieldtype === "big"
                    ? input_element.value
                          .replace(/\s+/g, " ") // removes whitespaces in between words
                          .replace(/^\s+|\s+$/g, "") // removes whitespaces at the start and at the end of the string
                    : tinymce.get(input_element.id).getContent(), // we don't have to remove whitespaces since this is WYSIWYG
        };
        console.log(api_route);
        console.log(update_data);

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
                alert("Successfully Updated!");
            },
            error: function (error) {
                alert("Update Failed.");
            },
        });
    });
}

// $("#test").on("submit", (e) => {
//     e.preventDefault();
//     const api_route = $("#test").data("route");
//     const toUpdate = $("#test").data("toupdate");
//     const update_data = {
//         page_title: $("#title-editor").val(),
//     };
//     console.log(api_route);
//     console.log(toUpdate);
//     console.log(update_data);

//     $.ajaxSetup({
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//     });

//     // Send POST request to server
//     $.ajax({
//         url: api_route,
//         method: "POST",
//         data: update_data,
//         success: function (response) {
//             alert("Update Ok!");
//         },
//         error: function (error) {
//             alert("Something went wrong");
//         },
//     });
// });
