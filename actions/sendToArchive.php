<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}
if ($_GET['mid']) {
        $sql = "INSERT INTO archive SELECT * FROM mail WHERE  mid=$_GET[mid]";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $sql2 = "DELETE FROM mail WHERE mid='$_GET[mid]'";
            mysqli_query($conn, $sql2);
        }
        echo "<script>localStorage.setItem('alert','Conversation archived.');location.href='../$_GET[type].php'</script>";
   
} else {
    header("Location:../inbox.php");
    exit;
}
