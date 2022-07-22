<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}

$senders = $_SESSION["email"];


if (isset($_POST['btnSave'])) {
    $editName = $_POST["name"];
    $editPhone = $_POST["phone"];
    $sql = "Update userdetails Set name='$editName', phone='$editPhone' Where id='$senders'";
    mysqli_query($conn, $sql);
    echo "<script>localStorage.setItem('alert','Profile updated successfully.');location.href='../profile.php'</script>";
}
if (isset($_POST['btnReset'])) {
    echo "<script>localStorage.setItem('alert','Future work.');location.href='../profile.php'</script>";
    exit;
    // $c_password = $_POST['c_password'];
    // $r_password = $_POST['r_password'];
    // $n_password = $_POST['n_password'];
    // echo $c_password;
    // if ( $r_password != $n_password ) {
    //     echo "<script>localStorage.setItem('alert','Reenter password didn't match.');location.href='../profile.php'</script>";
    //     exit;
    // }
    // if (strlen($r_password) == 0) {
    //     echo "<script>localStorage.setItem('alert','Reenter password didn't match.');location.href='../profile.php'</script>";
    //     exit();
    // }
    // $sql = "Select id from UserDetails Where ID='$senders' and password='$c_password '";
    // $res = mysqli_query($conn, $sql);
    // $n = mysqli_num_rows($res);
    // if ($n == 0) {
    //     echo "<script>localStorage.setItem('alert','Current password didn't match.');location.href='../profile.php'</script>";
    //     exit();
    // } else {
    //     $sql = "Update  userdetails Set password='$r_password' Where id='$senders'";
    //     mysqli_query($conn, $sql);
    //     echo "<script>localStorage.setItem('alert','Password reset successfully.');location.href='../profile.php'</script>";
    //     exit();
    // }
}
