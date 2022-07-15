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
    <title>Inbox</title>
</head>

<body>
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
                            <th style="max-width: calc(100vw - 700px);">Message</th>
                            <th>From</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select * from mail where MailBox='inbox' and owner='$user' order by dttime desc";
                        $res = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($res)) {
                            $formatedDateArray =  preg_split("/\-/", $row['dttime']);
                            // echo "<script>console.log('" . json_encode($formatedDateArray) . "');</script>";
                            $formatedDate = "$formatedDateArray[2]-$formatedDateArray[1]-$formatedDateArray[0]";
                            echo "<tr style='border-top:5px solid rgb(247, 245, 255);'>
                                    <td> <i class='fa fa-star-o' aria-hidden='true'></i> </td>
                                    <td style='max-width: calc(100vw - 700px);  white-space: nowrap;
                                    overflow: hidden;text-overflow: ellipsis;' ><b>$row[sub]&nbsp;&nbsp;-&nbsp;&nbsp;</b>$row[message]</td>
                                    <td>$row[sender]</td>
                                    <td>$formatedDate</td>
                                 </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- insideBottom links -->
    <?php include "./includes/insideBottomLinks.php" ?>
</body>

</html>