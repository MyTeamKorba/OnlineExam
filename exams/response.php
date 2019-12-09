<?php
session_start();

$from_time = date('Y-m-d H:i:s');

$to_time = $_SESSION['end_time'];

$timefirst = strtotime($from_time);

$timesecond = strtotime($to_time);

$differenceInSecond = $timesecond - $timefirst;

echo 'Duration : '.gmdate("H:i:s",$differenceInSecond);

?>