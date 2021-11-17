$(function () {
    $('input[type=submit]').click(function () {
        if ($("#name").val() == "" || $("#email").val() == "" || $("#comments").val() == "") {

            $("#message").html('<strong>Error: </strong>All fields are requred!');
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "model/post.php",
                data: $("#myform").serialize(),

                success: function (data) {
                    $('#message').html(data);
                }
            });
        }
    });
})