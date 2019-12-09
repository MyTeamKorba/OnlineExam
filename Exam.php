<?php
session_start();
include_once('exams/AgeCal.php');
$Age = new AgeCal();
$Age->setDate('21');
$Age->setMonth('12');
$Age->setYear('1988');

$DOB = $Age->DOB();

print_r('Age Calculate -> Year : ' . $DOB['Years']);
print_r(', Month : ' . $DOB['Months']);
print_r(', Day : ' . $DOB['Days']);

$_SESSION['start_time'] = '2 hours 5 minutes';
$end_time = date("d-m-Y H:i:s", strtotime('+' . $_SESSION['start_time'], strtotime(date("d-m-Y H:i:s"))));
$_SESSION['end_time'] = $end_time;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <?php include('links.php'); ?>
        <style>
            .btns {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 5px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }


            .myButton {
                box-shadow: inset 1px 0px 8px 2px #bbdaf7;
                background: #79bbff linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
                border-radius: 5px;
                width: 35px;
                height: 35px;
                margin: 1px 1px 1px 1px;
                border: 1px solid #84bbf3;
                display: inline-block;
                cursor: pointer;
                color: #ffffff;
                font-family: Arial, serif;
                font-size: 14px;
                font-weight: bold;
                text-align: center;
                padding: 7px 1px;
                text-decoration: none;
                text-shadow: 0px 0px 1px #528ecc;
            }

            .myButton:hover {
                background: #378de5 linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
                text-decoration: none;
            }

            .myButton:active {
                position: relative;
                top: 1px;
            }
        </style>
    </head>
    <body>
    <div class="container-fluid">
        <!--Header -->
        <div class="row">
            <div class="col-sm-12">
                <h1>Online Examination</h1>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-9" style="background-color:yellow;">
                        <div class="row">
                            <!-- -->
                            <div class="col-sm-12" style="background-color:#ea6153;">
                                <div style="float: left">
                                    <input type="submit" class="btns" name="Section1" value="Section 1"/>
                                    <input type="submit" class="btns" name="Section2" value="Section 2"/>
                                    <input type="submit" class="btns" name="Section3" value="Section 3"/>
                                    <input type="submit" class="btns" name="Section4" value="Section 4"/>
                                    <input type="submit" class="btns" name="Section5" value="Section 5"/>
                                </div>
                                <div class="dropdown show" style="float: right">
                                    <button type="button" class="btn btns dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="true">
                                        Dropdown button
                                    </button>
                                    <div class="dropdown-menu hide" x-placement="bottom-start"
                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                        <a class="dropdown-item" href="#">hindi</a>
                                        <a class="dropdown-item" href="#">English</a>
                                        <a class="dropdown-item" href="#">Hindi/English</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- -->
                            <div class="col-sm-12" style="background-color:#e3d2d2;">
                                <div class="row">
                                    <!-- -->
                                    <div class="col-sm-12" style="background-color:#e3d2d2;">
                                        Questions No 5. - <br>

                                    </div>
                                    <div class="col-sm-12" style="background-color:#e3d2d2;">
                                        Options. 1- <br>

                                    </div>
                                    <div class="col-sm-12" style="background-color:#e3d2d2;">
                                        Options. 2- <br>

                                    </div>
                                    <div class="col-sm-12" style="background-color:#e3d2d2;">
                                        Options. 3- <br>

                                    </div>
                                    <div class="col-sm-12" style="background-color:#e3d2d2;">
                                        Options. 4- <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3" style="background-color:#e1e1e1;">
                        <div class="row">
                            <div class="col-sm-12" style="background-color:#e1e1e1;">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <div class="row">
                                            <div class="col-sm-8" style="background-color:#d9edf7;">
                                                <p>Candidate Name : <b>Praveen Kumar Khalkho</b></p>
                                                <p>Application No : <b>89569865986</b></p>
                                                <p><b id="clocks"></b></p>
                                            </div>
                                            <div class="col-sm-4" style="background-color:#e1e1e1;">
                                                <img src="img/MJ.jpg" alt="user Img" width="120%"
                                                     style="text-align: center; margin-left: -14px;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-light">
                                    <div class="card-body text-center">

                                    </div>
                                </div>
                                <div class="card bg-light" style="height:350px; overflow-y: scroll">
                                    <div class="card-body">
                                        <?php
                                        for ($val = 1; $val <= 150; $val++) {
                                            echo '<button id="Btn' . $val . '" class="myButton">' . $val . '</button>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    <script type="text/javascript">
        setInterval(function () {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "exams/response.php", false);
            xmlhttp.send(null);
            document.getElementById('clocks').innerHTML = xmlhttp.responseText;
        }, 1000)
    </script>
    </html>
<?php
