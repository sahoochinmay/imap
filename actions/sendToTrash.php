<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}
if ($_GET['mid']) {
    if ($_GET['type'] == "inbox") {
        // $sql = "Select * from mail Where mid=$_GET[mid]";
        $sql = "INSERT INTO trash SELECT * FROM mail WHERE  mid=$_GET[mid]";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $sql2 = "DELETE FROM mail WHERE mid='$_GET[mid]'";
            mysqli_query($conn, $sql2);
        }
        header("Location:../inbox.php");
        exit;
    } else {
        header("Location:../inbox.php");
        exit;
    }
} else {
    header("Location:../inbox.php");
    exit;
}
