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
    <title>Sent Mails - iMail</title>
</head>

<body>
    <script>

    </script>
    <!-- Inside Nav -->
    <?php include "./includes/insideNavbar.php" ?>
    <main class="mailbox_main">
        <!-- Inside Nav -->
        <?php include "./includes/sidebar.php" ?>
        <div class="mailArea">
            <div class="mailContainer">
                <table class="customTable">
                    <thead>
                        <tr>
                            <th style="width: 50px;"></th>
                            <th>To</th>
                            <th style="max-width: calc(100vw - 800px);">Message</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select * from mail where MailBox='sent' and owner='$user' order by dttime desc";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                            $dateAndTimeArray =  preg_split("/\ /", $row['dttime']);
                            $formatedDateArray =  preg_split("/\-/", $dateAndTimeArray[0]);
                            $formatedDate = "$formatedDateArray[2]-$formatedDateArray[1]-$formatedDateArray[0]";
                            $formatedTimeArray =  preg_split("/\:/", $dateAndTimeArray[1]);
                            $formatedTime = "";
                            if ((int) $formatedTimeArray[0] > 12) {
                                $actualValue = (int) $formatedTimeArray[0] - 12;
                                $formatedTime = "$actualValue:$formatedTimeArray[1] pm";
                            } else  $formatedTime = "$formatedTimeArray[0]:$formatedTimeArray[1] am";
                            $json_encodeValue = json_encode($row);
                            // echo "<script>mail_data = $json_encodeValue; console.log('" . json_encode($row) . "');</script>";
                            echo "<tr  onclick='redirectToMailBox($json_encodeValue);'  style='border-top:5px solid rgb(247, 245, 255);' >
                                    <td> <i class='fa fa-star-o' aria-hidden='true'></i> </td>
                                    <td>$row[receiver]</td>
                                    <td style='max-width: calc(100vw - 700px);  white-space: nowrap;
                                    overflow: hidden;text-overflow: ellipsis;' ><b>$row[sub]&nbsp;&nbsp;-&nbsp;&nbsp;</b>$row[message]</td>
                                    <td>$formatedTime<br />$formatedDate</td>
                                 </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
        function redirectToMailBox(value) {
            localStorage.setItem('mail_data', JSON.stringify(value));
            location.href = 'mailbox.php'
        }
    </script>
    <!-- insideBottom links -->
    <?php include "./includes/insideBottomLinks.php" ?>
</body>

</html>