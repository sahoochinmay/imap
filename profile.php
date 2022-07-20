<?php
include './config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}
$user = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Header links -->
    <?php include "./includes/headerlinks.php" ?>
    <title>Profile - iMail</title>
</head>

<body>
    <script>

    </script>
    <!-- Inside Nav -->
    <?php include "./includes/insideNavbar.php" ?>
    <main class="mailbox_main">
        <!-- Inside Nav -->
        <?php include "./includes/sidebar.php" ?>
        <div class="profile_container page_container">
            <div class="profile_img_cont">
                <div class="profile_Pic">
                    <input type="file" accept="image/*" id="profile_image_input_field" onchange="loadFile(event,'profile_img_id')">
                    <label for="profile_image_input_field"><i class="fa fa-camera" aria-hidden="true"></i></label>
                    <img id="profile_img_id" class="profile_img" src="./assets/profile.png" />
                </div>
            </div>
            <div class="personalDetails">
                <form action="">
                    <input type="text" name="" id="" placeholder="Name">
                    <input type="text" name="" id="" placeholder="Phone Number">
                    <input type="email" name="" id="" placeholder="Email Id"> <br>
                    <div class="btn_Container">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
            <div class="passwordReset">
                <h3>Reset Password</h3>
                <form action="">
                    <input type="password" name="" id="" placeholder="Current Password"><br>
                    <input type="password" name="" id="" placeholder="New Password"><br>
                    <input type="password" name="" id="" placeholder="Re-enter Password"><br>
                    <div class="btn_Container">
                        <button type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- insideBottom links -->
    <?php include "./includes/insideBottomLinks.php" ?>
</body>

</html>