
<!-- The Modal -->
<div class="modal fade" id="Modalregister">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="w-100 text-center modal-title login-text">Register</h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form action="" method="POST" class="login-email">
                        <div class="row">
                            <div class="form-group col">
                                <input type="text" placeholder="First Name" name="first_name" value="" required>
                            </div>
                            <div class="form-group col">
                                <input type="text" placeholder="Last Name" name="last_name" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="tel" placeholder="+212622345675" name="phoneNumber" value="" required>
                            </div>
                            <div class="form-group col">
                                <input type="text" placeholder="CIN" name="cin" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="email" placeholder="Email" name="email" value="" required>
                            </div>
                            <div class="form-group col">
                                <input type="password" placeholder="Password" name="password" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn">Register</button>
                        </div>
                        <div>
                        <p class="login-register-text">Have an account?
                            <a data-toggle="modal" data-target="#myModal" href="login.php" >Login</a>.</p>
                          <?php include_once "login.php" ?>
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




