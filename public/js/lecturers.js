$('#save').on('click', function () {
    const data = {
        "fullName": $('#full-name').val(),
        "degree": $('#degree').val()
    }

    $.ajax({
        url: "/api/v1/lecturers",
        type: 'POST',
        data: data,
        success: function (result) {
            location.reload();
        }
    });
});

function tryEdit (id) {
    $.ajax({
        url: "api/v1/lecturers/" + id,
        success: function (result) {
            $('#full-name').val(result.data.fullName);
            $('#degree').val(result.data.degree);
        }
    });
}
