function cleanSelectsFrom (option) {
    switch (option) {
        case 'group':
            $('#group').empty().append('<option value="0" selected="">Tanlang...</option>');
        case 'student':
            $('#student').empty().append('<option value="0" selected="">Tanlang...</option>');
            $('#previousAssesses').text("");
        case 'lessonType':
            $('#lessonType').val('NONE');
        case 'theme':
            $('#theme').val('');
        case 'lessonScore':
            $('#lessonScore').val(0);
            break;
    }
}

$(document).ready(
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
            cleanSelectsFrom('group');
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
    cleanSelectsFrom('student');
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

$('#student').on('change', function() {
    $('#previous').text("");
    $.ajax({
        url: "/api/v1/assessments?studentId=" + $('#student').val() + "&subjectId=" + $('#subject').val(),
        success: function ( result ) {
            if (result.data.length === 0) {
                $('#previous').append("<p><span class='badge rounded-pill text-bg-warning'>Ushbu fan bo'yicha qayta topshirishlar mavjud emas.</p>")
            } else {
                $('#previous').append("<table id=\"previousAssesses\" class=\"table table-hover table-sm table-bordered\"><thead><tr><th>Dars sanasi</th><th>Qayta topshirish sanasi</th><th>Ball</th></tr></thead><tbody></tbody></table>");
                let $data = $(result.data);
                $data.each(function (index, value) {
                    let badge = value.lessonScore === 0 ? "<td><span class=\"badge rounded-pill text-bg-danger\">" + value.lessonScore + "</span></td>" : "<td><span class=\"badge rounded-pill text-bg-success\">" + value.lessonScore + "</span></td>"
                    $('#previousAssesses tbody').append("<tr><td>" + value.lessonDate + "</td><td>" + value.assessmentDate + "</td>" + badge + "</tr>");
                });
            }
        }
    });
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
        subjectId: $('#subject').val(),
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

