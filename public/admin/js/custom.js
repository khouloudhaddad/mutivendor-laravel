$(document).ready(function () {
    //check admin password is correct or not
    $('#current_password').keyup(function () {
        let current_password = $("#current_password").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "post",
            url: "/admin/check-current-password",
            data: { current_password: current_password },
            success: function (response) {
                console.log(response==true)
                if (response == false) {
                    $("#check_password").html("<font color='red'>Current Password is Incorrect</font>");
                } else if (response == true) {
                    $("#check_password").html(
                        "<font color='green'>Current Password is Correct</font>"
                    );
                }
            },
            error: function () {
                alert('Error')
            }
        });
    })
})
