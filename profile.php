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
    <?php include "includes/headerlinks.php" ?>
    <title>Profile - iMail</title>

    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
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
                <form method="post" enctype="multipart/form-data" action="./actions/updateProfile.php" >
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="text" name="phone" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="phone_number" placeholder="Phone Number">
                    <input type="email" name="" id="email" readonly placeholder="Email Id"> <br>
                    <div class="btn_Container">
                        <button name="btnSave" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <div class="passwordReset">
                <h3>Reset Password</h3>
                <form action="">
                    <input type="password" name="c_password" id="c_password" placeholder="Current Password"><br>
                    <input type="password" name="n_password" id="n_password" placeholder="New Password"><br>
                    <input type="password" name="r_password" id="r_password" placeholder="Re-enter Password"><br>
                    <div class="btn_Container">
                        <button type="submit">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    $sql = "Select * from userdetails where  id='$user'";
    $res = mysqli_query($conn, $sql);
    $data = json_encode(mysqli_fetch_assoc($res));
    echo "    <script>
    function displayProfileData(d) {
        console.log(d)
        document.getElementById('name').value = d?.name
        document.getElementById('phone_number').value = d?.phone
        document.getElementById('email').value = d?.id
    
    }
    </script>";
    echo "<script>displayProfileData($data);</script>";
    ?>
    <script>
        document.getElementById('name')
    </script>
    <!-- insideBottom links -->
    <?php include "./includes/insideBottomLinks.php" ?>
</body>

</html>