$( document ).ready(
    $.ajax({
        url: "/api/v1/lecturers",
        success: function( result ) {
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.degree}, ${item.fullName}`)
                    .appendTo("#lecturer");
            }
        }
    }),
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
    }),
    $.ajax({
        url: "/api/v1/subjects",
        success: function( result ) {
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.name}`)
                    .appendTo("#subject");
            }
        }
    })
);

$('#faculty').on('change', function () {
    $.ajax({
        url: "/api/v1/groups?facultyId=" + $('#faculty').val(),
        success: function( result ) {
            console.log(result);
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.name}, ${item.language}, ${item.grade}-kurs`)
                    .appendTo("#group");
            }
        }
    })
});

$('#group').on('change', function () {
    $.ajax({
        url: "/api/v1/students?groupId=" + $('#group').val(),
        success: function( result ) {
            console.log(result);
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.fullName}, ${item.studyType}`)
                    .appendTo("#student");
            }
        }
    })
});
