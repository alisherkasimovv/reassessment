$('#save').on('click', function () {
    const data = {
        "name": $('#name').val(),
        "facultyId": $('#faculty').val(),
        "language": $('#language').val(),
        "grade": $('#grade').val()
    }

    $.ajax({
        url: "/api/v1/groups",
        type: 'POST',
        data: data,
        success: function (result) {
            location.reload();
        }
    });
});

$('#open-modal').on('click', function () {
    $.ajax({
        url: "/api/v1/faculties",
        success: function( result ) {
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.facultyCode} ${item.name}`)
                    .appendTo("#faculty");
            }
        }
    })
})
