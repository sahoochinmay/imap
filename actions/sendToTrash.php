<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}
if ($_GET['mid']) {
    if ($_GET['type'] == "inbox" || $_GET['type'] == "sentmails" ) {
        // $sql = "Select * from mail Where mid=$_GET[mid]";
        $sql = "INSERT INTO trash SELECT * FROM mail WHERE  mid=$_GET[mid]";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $sql2 = "DELETE FROM mail WHERE mid='$_GET[mid]'";
            mysqli_query($conn, $sql2);
        }
        echo "<script>localStorage.setItem('alert','Mail moved to trash.');location.href='../$_GET[type].php'</script>";
    } else 
    if ($_GET['type'] == "trash") {
        // $sql = "Select * from mail Where mid=$_GET[mid]";
        $sql = "DELETE FROM trash WHERE mid='$_GET[mid]'";
        $res = mysqli_query($conn, $sql);
        echo "<script>localStorage.setItem('alert','Mail permanently deleted..');location.href='../$_GET[type].php'</script>";
    } else {
        header("Location:../inbox.php");
        exit;
    }
} else {
    header("Location:../inbox.php");
    exit;
}
