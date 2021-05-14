require('./bootstrap');
require('jquery-validation/dist/jquery.validate.js');


(function ($) {
    "use strict"; // Start of use strict
    $('form').validate();
})(jQuery);


window.show = function (token, route, cl = '') {
    $.ajax(route, {
        type: "GET",
        data: ({ _token: token }),
        success: function (response) {
            $('#showModalClass').addClass(cl);
            $("#showModelBody").html(response);
            $("#showModel").modal('show');
        }
    });
}
window.editStudentForm = function (token,url,id) {
        $.ajax(url, {
        type: 'POST',
        data: { _token: token, id:id},
        success: function (result) {

            $("#NewStudentForm").html(result);
        }
    });
    $('#addStudent').modal('show');
}

window.updateStudent = function (token, url,id) {

    $.ajax(url, {
        method: 'POST',
        data: {
            _token: token,
            student_name: $('#student_name').val(),
            fathers_name: $('#fathers_name').val(),
            dob: $('#dob').val(),
            email: $('#email').val(),
            address: $('#address').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            pin: $('#pin').val(),
            phone: $('#phone').val(),
            class: $('#class').val(),
            marks: $('#marks').val(),
            id:id,
        },
        success: function (result) {

           if (result.errors) {
                $('.alert-danger').html('');
                $('.alert-danger').removeClass('d-none');
                if (result.errors.join().includes("valid email") || result.errors.join().includes(" email format")) {
                    $('.alert-danger').append('<li> The email must be a valid email address.</li>');
                }
                else if (result.errors.join().includes("phone")) {
                    $('.alert-danger').append('<li>The phone must be an integer.</li>');
                }
                else if (result.errors.join().includes("marks")) {
                    $('.alert-danger').append('<li>The marks must be an integer.</li>');
                }
                else if (result.errors.join().includes("pin must")) {
                    $('.alert-danger').append('<li>The pin must be an integer.</li>');
                }
                else {
                    $('.alert-danger').append('<li> Please fill all the required fields. </li>');
                }

            }else {
                $('.alert-danger').html('');
                $('.alert-danger').addClass('d-none');
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(result.success_message);
                $(".table").load(location.href + " .table>*", "");

            }

        }
    });
}
