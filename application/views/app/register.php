<?php
require './application/config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php {
        echo URL;
    } ?>public/assets/css/login.css">
    <link rel="stylesheet" href="<?php {
        echo URL;
    } ?>public/assets/sweetalert/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php {
        echo URL;
    } ?>public/assets/boxicons/css/boxicons.css">
    <title>File Tracking | Register</title>
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
                <input type="text" id="fullname" class="input-field" required autocomplete="off">
                <label for="fullname" class="label">Fullname</label>
                <i class="bx bx-user icon"></i>
            </div>
            <div class="input_box">
                <input type="text" id="email" class="input-field" required autocomplete="off">
                <label for="email" class="label">Email</label>
                <i class="bx bx-user icon"></i>
            </div>
            <div class="input_box">
                <input type="password" id="password" class="input-field" required autocomplete="off">
                <label for="password" class="label">Password</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>

            <div class="input_box">
                <button class="input-submit" id="register">Register</button>
            </div>
            <div class="register">
                <span><a href="#" id="goBack">Go Back</a></span>
            </div>
        </div>
    </div>
</body>

</html>

<script src="<?php {
    echo URL;
} ?>public/assets/js/jquery.js"></script>
<script src="<?php {
    echo URL;
} ?>public/assets/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="<?php {
    echo URL;
} ?>public/assets/js/login.js"></script>
<script>
    $(document).ready(function () {

        $('#register').on('click', function () {

            var username = $('#username').val()
            var password = $('#password').val()
            var fullname = $('#fullname').val()
            var email = $('#email').val()

            if (username == '') {
                notify('error', 'Please input username')
            }
            else if (password == '') {
                notify('error', 'Please input password')
            }
            else {
                $.ajax({
                    method: 'POST',
                    url: "../api/registerUser",
                    data: { username: username, password: password, fullname: fullname, email: email },
                    success: function (data) {
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

        $('#goBack').on('click', function () {
            window.location.replace("<?php {
                echo URL;
            } ?>");
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
                    window.location.replace("<?php {
                        echo URL;
                    } ?>");
                }
                else{

                }
            }
        })
    }
</script>