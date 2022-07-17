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
                            <th style="width: 110px;"></th>
                            <th style="max-width: calc(100vw - 1000px);">Message</th>
                            <th>From</th>
                            <th>To</th>
                            <th style="width:100px;">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select * from trash where owner='$user' order by dttime desc";
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
                                    <td><p style='color:red;margin-top:10px;' ><i class='fa fa-trash' aria-hidden='true'></i> Deleted</p></td>
                                    <td style='max-width: calc(100vw - 1000px);  white-space: nowrap;
                                    overflow: hidden;text-overflow: ellipsis;' ><b>$row[sub]&nbsp;&nbsp;-&nbsp;&nbsp;</b>$row[message]</td>
                                    <td>$row[sender]</td>
                                    <td>$row[receiver]</td>
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