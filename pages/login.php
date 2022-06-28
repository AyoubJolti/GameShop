<?php //include_once "Header.php"?>
<!--<!DOCTYPE html>-->
<!--<html lang="">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">-->
<!--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>-->
<!--    <link rel="stylesheet" href=../css/style-login.css>-->
<!---->
<!--    <title>Login</title>-->
<!--</head>-->
<body>

<!--Login Modaaaal -->
<!-- The Modal -->
<div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="w-100 text-center modal-title login-text" >Login</h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="" method="POST" class="login-email">
                        <div class="form-group ">
                            <input type="email" placeholder="Email" name="email" value="" required>
                        </div>
                        <div class="form-group ">
                            <input type="password" placeholder="Password" name="password" value="" required>
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn">Login</button>
                        </div>
                        <div>
                        <p class="login-register-text">Don't have an account?
                            <a data-toggle="modal" data-target="#Modalregister" href="register.php" >Register Here</a>.</p>
                        </div>
                    </form>
            </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
<!--Register Modaaal -->

</div>
</body>
</html>