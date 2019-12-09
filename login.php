
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
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" action="Server/server.php" autocomplete="off" id="formLogin"
                                  method="POST">
                                <div class="form-group">
                                    <label for="uname1">Email</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email"
                                           id="uname1" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd1">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd1" id="pwd1"
                                                                     required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" name="login" id="btnLogin">Login</button>
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
