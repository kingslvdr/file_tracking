<?php
require './application/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php {echo URL; }?>public/assets/css/login.css">
    <link rel="stylesheet" href="<?php {echo URL; }?>public/assets/sweetalert/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php {echo URL; }?>public/assets/boxicons/css/boxicons.css">
    <title>File Tracking | Login</title>
</head>


<body>
    <!-- <div class="area">

    </div> -->
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="login_box">
            <div class="login-header">
                <span>Login</span>
            </div>
            <div class="input_box">
                <input type="text" id="username" class="input-field" required autocomplete="off">
                <label for="username" class="label">Username</label>
                <i class="bx bx-user icon"></i>
            </div>
            <div class="input_box">
                <input type="password" id="password" class="input-field" required autocomplete="off">
                <label for="password" class="label">Password</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>

            <div class="input_box">
                <button class="input-submit" id="login">Login</button>
            </div>
            <div class="register">
                <span>Register <a href="#" id="regBtn">here</a></span>
            </div>
        </div>
    </div>
</body>

</html>

<script src="<?php {echo URL; }?>public/assets/js/jquery.js"></script>
<script src="<?php {echo URL; }?>public/assets/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="<?php {echo URL; }?>public/assets/js/login.js"></script>
<script>
    $(document).ready(function () {
        $('#login').on('click', function () {

            var username = $('#username').val()
            var password = $('#password').val()

            if (username == '') {
                notify('error', 'Please input username')
            }
            else if (password == '') {
                notify('error', 'Please input password')
            }
            else {
                $.ajax({
                    method: 'GET',
                    url: "./api/getUser",
                    data: { username: username, password: password},
                    success: function (data) {
                        console.log(data)
                        if (data.success == 1) {
                            notifyBig(data.icon, data.message, true)
                        }
                        else {
                            notifyBig(data.icon, data.message, false)
                        }
                    }
                })
            }
        })

        $('#regBtn').on('click', function(){
            window.location.replace("app/Register");
        })
    })
    function notify(icon, message) {
        Swal.fire({
            toast: true,
            position: 'top',
            timerProgressBar: true,
            timer: 2500,
            icon: icon,
            title: message,
            showConfirmButton: false
        })
    }

    function notifyBig(icon, message, reroute) {
        Swal.fire({
            title: message,
            icon: icon,
            allowOutsideClick: false,
            allowEscapeKey: false,
            confirmButtonText: 'Close'
        }).then(c => {
            if (c.isConfirmed) {
                if (reroute) {
                    window.location.replace("app/Dashboard");
                }
                else{

                }
            }
        })
    }
</script>