<?php
$errors = array();
require('DBConnection.php');
include('variables.php');
// Start the session
session_start();


if (isset($_POST['signup'])) {

    $uid = $_POST['uid'];
    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $age = $_POST['Age'];
    $gender = $_POST['gender'];
    $Edu = $_POST['Edu'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];
    $address = $_POST['address'];

    if ($pass1 == $pass2) {
        $query1 = "INSERT INTO login(uid, jdate, uname, utype, mno, otp, status) VALUES('$uid', '$jdate', '$email', '$utype', '$mno', '$pass2', '$otp', '$status')";
        $query2 = "INSERT INTO login(uid, jdate, uname, utype, mno, otp, status) VALUES('$uid', '$jdate', '$email', '$utype', '$mno', '$pass2', '$otp', '$status')";

        if ($Con->query($query1) === TRUE) {
            header("Location: signup.php?p=1");
        } else {
            echo "Error : " . $query1 . "<br>" . $Con->error;
        }
        $Con->close();
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass1 = md5($_POST['pwd1']);
    $query = "SELECT * FROM login WHERE uname='$email'AND pass='$pass1'";
    $result = $Con->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION["uid"] = $row["uid"];
            header("Location: ../index.php");
        }

    } else {
        echo "0 results";
    }
    $Con->close();
}

if (isset($_POST['ForgetPass'])) {

    $email = $_POST['email'];
    $mno = $_POST['mno'];

    $query = "SELECT * FROM login WHERE uname='$email'AND mno='$mno'";
    $result = $Con->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        header("Location: ResetPass.php");
    } else {
        echo "0 results";
    }
    $Con->close();
}


if (isset($_POST['AddQue'])) {
    $Que = $_POST['Que'];
    $Op1 = $_POST['Op1'];
    $Op2 = $_POST['Op2'];
    $Op3 = $_POST['Op3'];
    $Op4 = $_POST['Op4'];
    $Ans = $_POST['Ans'];
    $StudAns = '';
    $query = "INSERT INTO que(que, op1, op2, op3, op4, ans, sans) VALUES('$Que', '$Op1', '$Op2', '$Op3', '$Op4', '$Ans', '$StudAns')";
    if ($Con->query($query) === TRUE) {
        // output data of each row
        header("Location: ../AddQue.php");
    } else {
        echo '<script>alert("Error");</script>';
        header("Location: ../AddQue.php");
    }
    $Con->close();

}
if (isset($_POST['UpQue'])) {
    $id =$_POST['qid'];
    $Que = $_POST['Que'];
    $Op1 = $_POST['Op1'];
    $Op2 = $_POST['Op2'];
    $Op3 = $_POST['Op3'];
    $Op4 = $_POST['Op4'];
    $Ans = $_POST['Ans'];
    $StudAns = '';

    $query = "UPDATE que SET que='$Que', op1='$Op1', op2='$Op2', op3='$Op3', op4='$Op4', ans='$Ans', sans='$StudAns' WHERE id='$id'";

    if ($Con->query($query) === TRUE) {
        // output data of each row
        header("Location: ../AddQue.php");

    } else {
        echo '<script>alert("Error");</script>';
        header("Location: ../AddQue.php");
    }
    $Con->close();

}

?>