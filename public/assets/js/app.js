var app = function () {};

// serialized form data
app.formData = null;

app.request = function () {
    $.ajax({
        type: "POST",
        url: "./app/Ajax.php",
        data: this.formData,
        dataType: "json",
        success: function (data) {
            // console.log(data);
            $('button').html('Calculate!');
            $('#result').html(JSON.stringify(data));
        },
        error: function (xhr) {
            // error handling
            console.log(xhr.responseText);
        }
    });
};

$(document).ready(function () {
    $(document).on('submit', '#csf', function (e) {
        $('button').html('Loading ...');
        // prevent default action
        e.preventDefault();
        app.formData = $(this).serialize();
        app.request();

    });
});