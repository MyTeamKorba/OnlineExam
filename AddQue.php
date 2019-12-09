<?php
include('Server/DBConnection.php');
include_once('Que.php');
$Q = new Que();
if (isset($_POST['BtnSearch'])) {
    $id = $_POST['search'];
    $sql = "SELECT * FROM que WHERE id='$id'";
    $result = $Con->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $Q->setId($id);
            $Q->setQue($row["que"]);
            $Q->setOp1($row["op1"]);
            $Q->setOp2($row["op2"]);
            $Q->setOp3($row["op3"]);
            $Q->setOp4($row["op4"]);
            $Q->setAns($row["ans"]);
        }
    } else {
        echo "0 results";
    }
    $Con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Examination</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('links.php'); ?>
    <style>
        body {
            font-family: Arial, serif;
        }

        * {
            box-sizing: border-box;
        }

        .overlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .overlay-content {
            position: relative;
            top: 46%;
            width: 80%;
            text-align: center;
            margin: auto;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            cursor: pointer;
            color: white;
        }

        .overlay .closebtn:hover {
            color: #ccc;
        }

        .overlay input[type=text] {
            padding: 15px;
            font-size: 17px;
            border: none;
            float: left;
            width: 80%;
            background: white;
        }

        .overlay input[type=text]:hover {
            background: #f1f1f1;
        }

        .overlay button {
            float: left;
            width: 20%;
            padding: 15px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .overlay button:hover {
            background: #bbb;
        }
    </style>
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
                            <h3 class="mb-0">Add New Question</h3>
                        </div>
                        <div id="myOverlay" class="overlay">
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <form action="AddQue.php" method="post" autocomplete="off" enctype="multipart/form-data">
                                    <input type="text" placeholder="Search.." name="search" id="search">
                                    <button type="submit" name="BtnSearch"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form" action="Server/server.php" autocomplete="off" role="form" id="formLogin"
                                  method="POST">
                                <input type="hidden" name="qid" id="qid" value="<?php echo $Q->getId(); ?>">
                                <div class="form-group">
                                    <label for="Que">Question</label>
                                    <textarea type="text" class="form-control form-control-lg rounded-0" name="Que"
                                              id="Que" required=""><?php echo $Q->getQue(); ?></textarea>
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="Op1">Option 1</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Op1"
                                           id="Op1" value="<?php echo $Q->getOp1(); ?>" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="Op2">Option 2</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Op2"
                                           id="Op2" value="<?php echo $Q->getOp2() ?>" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="Op3">Option 3</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Op3"
                                           id="Op3" value="<?php echo $Q->getOp3(); ?>" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="Op4">Option 4</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Op4"
                                           id="Op4" value="<?php echo $Q->getOp4(); ?>" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="Ans">Right Answer</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="Ans"
                                           id="Ans" value="<?php echo $Q->getAns(); ?>" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <button type="reset" class="btn btn-success btn-lg float-right"
                                        id="reset" name="Reset">Reset
                                </button>

                                <button type="submit" class="btn btn-success btn-lg float-right"
                                        id="UpQue" name="UpQue">Update
                                </button>

                                <button type="submit" class="btn btn-success btn-lg float-right"
                                        id="AddQue" name="AddQue">Add Que
                                </button>
                                <button type="reset" class="btn btn-success btn-lg float-right" onclick="openSearch()">
                                    Open Search
                                    Box
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

    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
</body>
</html>
