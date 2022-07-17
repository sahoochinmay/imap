<?php
include '../config/config.php';
if (!isLoggedin()) {
	header("Location:login.php");
	exit;
}

if (isset($_POST['to'])) {
	$sender = $_SESSION["email"];
	$receiver = $_POST["to"];
	$sub = $_POST["sub"];
	$msg = $_POST["msg"];
	$attachment = null;
	$target = $_POST['target'];

	if (isset($_POST['btnSend'])) {
		echo "<p>Sending Mail</p>";
		if (true) {
			$sql = "Select id from UserDetails Where ID='$receiver'";
			$res = mysqli_query($conn, $sql);
			$n = mysqli_num_rows($res);
			if ($n == 0) {
				$sql1 = "Insert Into outbox_mails Values(NULL,'$sender','$receiver',now(),'$sub','sent',1,'$msg','$sender','$attachment')";
				 mysqli_query($conn, $sql1);
				// print_r($res1);
				echo '<br/>Receipent Address Not Found';
			} else {
				$sql3 = "Insert Into mail Values(NULL,'$sender','$receiver',now(),'$sub','sent',1,'$msg','$sender','$attachment')";
				mysqli_query($conn, $sql3);
				$sql2 = "Insert Into mail Values(NULL,'$sender','$receiver',now(),'$sub','inbox',0,'$msg','$receiver','$attachment')";
				mysqli_query($conn, $sql2);
				echo "<br/>Mail Sent";
				header("Location:../sentmails.php");
				exit;
			}
		} else {
			echo "<script>alert('Unable to send Mail');</script>";
		}
		// header("Location:../sentmails.php");
		// exit;
	}
	if (isset($_POST['btnSave'])) {
		echo "<br/>Saving Mail";
		if (isset($_POST['mid'])) {
			$sql = "Update draft Set Sender='$sender', Receiver='$receiver',DtTime=now(), Sub='$sub', message='$msg', Attachment='$attachment' Where Mid=$_POST[mid]";
			mysqli_query($conn, $sql);
			echo "<br/>Mail Saved";
		} else {
			$sql = "Insert Into draft Values(NULL,'$sender','$receiver',now(),'$sub','draft',1,'$msg','$sender','$attachment')";
			mysqli_query($conn, $sql);
			echo "<br/>Mail Saved";
			header("Location:../drafts.php");
			exit;
		}
	}
	// header("Location:../inbox.php");
	// exit;
} else {
	echo "<br/>Invalid Request";
}
