<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Examination</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('links.php'); ?>
</head>
<body ng-app="">
<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-9 col-md-8 mx-auto">
                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Sign Up</h3>
                        </div>

                        <div class="card-body">
                            <form class="form" action="Server/server.php" autocomplete="off" role="form" id="formLogin"
                                  method="POST">

                                <div class="form-group">
                                    <label for="uname">Full Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email"
                                           id="uname" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>

                                <div class="form-group">
                                    <label for="fname">Fathers Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="fname"
                                           id="fname"
                                           required="" autocomplete="off">
                                    <div class="invalid-feedback">Enter your Father's Name!</div>
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control form-control-lg rounded-0" id="dob"
                                           name="dob"
                                           required="" autocomplete="off">
                                    <div class="invalid-feedback">Enter your Date of birth.!</div>
                                </div>
                                <div class="form-group">
                                    <label for="Age">Age</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" id="Age"
                                           name="Age"
                                           required="" autocomplete="off">
                                    <div class="invalid-feedback">Enter your Age.!</div>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select type="text" class="form-control form-control-lg rounded-0" name="gender"
                                            id="gender" required="">
                                        <option> Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>

                                <div class="form-group">
                                    <label for="Edu">Education</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Edu"
                                           id="Edu" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" name="email"
                                           ng-model="email"
                                           id="email" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>

                                <div class="form-group">
                                    <label for="mno">Mobile</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="mno"
                                           id="mno" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea type="text" class="form-control form-control-lg rounded-0" name="address"
                                              id="address" required=""></textarea>
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>

                                <button type="submit" name="signup" class="btn btn-success btn-lg float-right"
                                        id="btnLogin">Sign up
                                </button>

                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
<script>
    $("#btnLogin").click(function (event) {
        //Fetch form to apply custom Bootstrap validation
        var form = $("#formLogin");
        if (form[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.addClass('was-validated');
    });
</script>
</body>
</html>
