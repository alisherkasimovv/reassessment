$('#save').on('click', function () {
    const data = {
        "name": $('#name').val(),
        "facultyCode": $('#faculty-code').val()
    }

    $.ajax({
        url: "/api/v1/faculties",
        type: 'POST',
        data: data,
        success: function (result) {
            location.reload();
        }
    });
});
