$('#save').on('click', function () {
    const data = {
        "name": $('#name').val()
    }

    $.ajax({
        url: "/api/v1/subjects",
        type: 'POST',
        data: data,
        success: function (result) {
            location.reload();
        }
    });
});
