<?php
include('Server/variables.php');
session_start();
if (!isset($_SESSION['uid'])) {
    header('Location: login.php');
} else {
    $uid = $_SESSION["uid"];
    print_r($uid);
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
                    <div class="col-lg-12 col-md-12 mx-auto">
                        <!-- form card login -->
                        <div class="card rounded shadow shadow-sm">
                            <div class="card-header">
                                <h3 class="mb-0">Welcome</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <a href="logout.php?">logout</a>
                                </div>
                                <div class="form-group">
                                    <a href="ForgetPass.php?">Forget Password</a>
                                </div>
                                <div class="form-group">
                                    <a href="Exam.php">Start Exam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

    <?php
}

?>