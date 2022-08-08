/*
    This is the script that handles the forms in the admin panel.

    by: rmhizon & sclee
*/

const infoGetter = (el) => {
    switch (el.dataset.fieldtype) {
        case "big":
            return el.value
                .replace(/\s+/g, " ") // removes whitespaces in between words
                .replace(/^\s+|\s+$/g, ""); // removes whitespaces at the start and at the end of the string

        case "tiny":
            return tinymce.get(el.id).getContent(); // we don't have to remove whitespaces since this is WYSIWYG
    }
};

const isEmpty = (str, type) => {
    if (type === "big") {
        // remove whitespaces
        str = str.replace(/\s/g, "");
    } else if (type === "tiny") {
        // remove whitespaces
        str = str.replace(/\s/g, "");
        str = str.replace(/<p>/g, "");
        str = str.replace(/<\/p>/g, "");
        str = str.replace(/\&nbsp;/g, "");
    }

    // if all characters were whitespaces
    if (str.length === 0) {
        return true;
    }

    return false;
};

const forms = $("form").get();
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
            // AJAX setup
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
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
                    alert("Update Failed. Try checking character count.");
                },
            });
        }
    });
}
