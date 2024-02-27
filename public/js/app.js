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
            for (let item of result.data) {
                $("<option>")
                    .attr("value", item.id)
                    .text(`${item.fullName}, ${item.studyType}`)
                    .appendTo("#student");
            }
        }
    })
});

$('#cancel').on('click', function () {
    $('#lecturer').val(0);
    $('#faculty').val(0);
    $('#subject').val(0);
    $('#group').val(0);
    $('#student').val(0);
    $('#lessonType').val('NONE');
    $('#theme').val('');
    $('#lessonScore').val(0);
});

function trySave (type) {

    console.log(type);
    const data = {
        lecturerId: $('#lecturer').val(),
        facultyId: $('#faculty').val(),
        subjectId: $('#subject').val(),
        groupId: $('#group').val(),
        studentId: $('#student').val(),
        lessonType: $('#lessonType').val(),
        lessonDate: $('#lessonDate').val(),
        theme: $('#theme').val(),
        lessonScore: type ? $('#lessonScore').val() : 0,
        isPassed: type ? 1 : 0
    }

    $.ajax({
        url: '/api/v1/assessments',
        type: 'POST',
        data: data,
        success: function(data){
            alert("Ma'lumotlar saqlandi!");
        },
        error: function(data){
            let errors = $.parseJSON(data.responseText);
            console.log(errors);
        }
    });

    return 0;
}

$('#nextRound').on('click', function (event) {
    event.preventDefault();
    trySave(0);
});
$('#success').on('click', function (event) {
    event.preventDefault();
    trySave(1);
});

