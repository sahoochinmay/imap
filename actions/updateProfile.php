<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}

$senders = $_SESSION["email"];
$editName = $_POST["name"];
$editPhone = $_POST["phone"];

if (isset($_POST['btnSave'])) {
    $sql = "Update userdetails Set name='$editName', phone='$editPhone' Where id='$senders'";
    mysqli_query($conn, $sql);
    echo "<script>localStorage.setItem('alert','Profile updated successfully.');location.href='../profile.php'</script>";
}
if (isset($_POST['btnReset'])) {
    // $sql = "Update userdetails Set name='$editName', phone='$editPhone' Where id='$senders'";
    // mysqli_query($conn, $sql);
    // echo "<script>localStorage.setItem('alert','Profile updated successfully.');location.href='../profile.php'</script>";
}