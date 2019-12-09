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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">OTP Verification</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate=""
                                  method="POST">

                                <div class="form-group">
                                    <label for="otp">Mobile OTP</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1"
                                           id="otp" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Sign up
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
