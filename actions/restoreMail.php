<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}
if ($_GET['mid']) {
        $sql = "INSERT INTO mail SELECT * FROM trash WHERE  mid=$_GET[mid]";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $sql2 = "DELETE FROM trash WHERE mid='$_GET[mid]'";
            mysqli_query($conn, $sql2);
        }
        header("Location:../trash.php");
        exit;
} else {
    header("Location:../trash.php");
    exit;
}
