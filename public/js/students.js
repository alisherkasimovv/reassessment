$('#save').on('click', function () {
    const data = {
        "fullName": $('#name').val(),
        "groupId": $('#group').val(),
        "studyType": $('#study-type').val()
    }

    $.ajax({
        url: "/api/v1/students",
        type: 'POST',
        data: data,
        success: function (result) {
            location.reload();
        }
    });
});

$('#open-modal').on('click', function () {
    $.ajax({
        url: "/api/v1/groups",
        success: function( result ) {
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.name}, ${item.language}, ${item.grade}-kurs`)
                    .appendTo("#group");
            }
        }
    })
})
