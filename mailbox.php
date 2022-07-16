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
    <title>Mailbox</title>
</head>

<body>
    <!-- Inside Nav -->
    <?php include "./includes/insideNavbar.php" ?>
    <main class="mailbox_main">
        <!-- Inside Nav -->
        <?php include "./includes/sidebar.php" ?>
        <div class="mailArea">
            <div class="mailDetailsWrapper">
                <div class="mailDetails">
                    <div class="topDetails">
                        <div class="mailLinks">
                            <ul>
                                <li><a href="javascript: history.go(-1)" class="backBtn"> <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a></li>
                                <li><a href="#"> <i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                <li><a href="#">Forward <i class="fa fa-share" aria-hidden="true"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-archive" aria-hidden="true"></i> Archive </a></li>
                                <li><a href="#"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </a></li>
                            </ul>
                        </div>
                        <div class="mailShortDetails">
                            <div class="shortInfo">
                                <p>Subject </p>: <span id="subject"></span><br>
                                <p>From</p>: <span id="from"></span><br>
                                <p>To</p>: <span id="to_mail"></span><br>
                                <p>Date</p>: <span id="date"></span>
                            </div>
                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" srcset="">
                        </div>
                    </div>
                    <div class="messageDetails">
                        <p id="message">
                        </p>
                        <small id="footer"></small>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        window.onload = function() {
            let mail_data = JSON.parse(localStorage.getItem('mail_data'))
            console.log(mail_data)
            if (mail_data) {
                document.getElementById('subject').innerText = mail_data?.sub
                document.getElementById('from').innerText = mail_data?.sender
                document.getElementById('to_mail').innerText = mail_data?.receiver
                let dttimeArr = mail_data?.dttime?.split(' ');
                let formatedDate = dttimeArr[0]?.split("-")
                let timeArray = dttimeArr[1]?.split(":")
                let formatedTime = "";
                if (parseInt(timeArray[0]) > 12) {
                    formatedTime = `${parseInt(timeArray[0]) - 12}:${timeArray[1]} pm`
                } else {
                    formatedTime = `${timeArray[0]}:${timeArray[1]} am`
                }
                console.log(dttimeArr)
                document.getElementById('date').innerText = formatedTime + " " + formatedDate[2] + '-' + formatedDate[1] + '-' + formatedDate[0]
                document.getElementById('message').innerText = mail_data?.message
            } else location.href = history.go(-1)
        }
    </script>
    <!-- insideBottom links -->
    <?php include "./includes/insideBottomLinks.php" ?>
</body>

</html>