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
    <title>Draft Mails - iMail</title>
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
                            <th style="width: 100px;"></th>
                            <th>To</th>
                            <th style="width: calc(100vw - 700px);">Message</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select * from draft where mailbox='draft' and owner='$user' order by dttime desc";
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
                            echo "<tr  onclick='opendraftModal($json_encodeValue);'  style='border-top:5px solid rgb(247, 245, 255);' >
                                    <td> <i class='fa fa-star-o' aria-hidden='true'></i> </td>
                                    <td><p style='color:red;margin-top:10px;' >draft</p></td>
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
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="SendMailTop" style="display: flex; justify-content:space-between; align-items:center">
                <h5 style="margin-bottom:0">Send Mail</h5>
                <span class="close">&times;</span>
            </div>
            <hr>
            <form action="./actions/sendmail.php" method="post" enctype="multipart/form-data">
                <div>
                    <label>To</label><br>
                    <input name="to" id="to" required="" class="w3-input w3-border w3-hover-shadow w3-margin-bottom" type="email" value="">
                </div>
                <div>
                    <label>Subject</label><br>
                    <input name="sub" id="sub" required="" class="w3-input w3-border w3-hover-shadow  w3-margin-bottom" type="text" value="">
                </div>
                <div>
                    <textarea name="msg" id="msg" class="w3-input w3-border w3-hover-shadow  w3-margin-bottom" style="height: 200px" placeholder="What's on your mind?" value=""></textarea>
                </div>
                <input type="hidden" value="" name="h1" id="h1">
                <div class="w3-section">
                    <!-- <b>Attachment : </b> -->
                    <!-- <input type="hidden" value="" name="attach" id="attach"> -->
                    <!-- <input type="file" name="attachment"> -->
                    <!-- <br> -->
                    <a class="w3-btn w3-red" href="#" id="modal_close_btn" >Cancel</a>

                    <div class="rightSec">
                        <input class="saveMail" type="submit" name="btnSave" value="Save Mail" class="w3-btn w3-right w3-green">
                        <input class="sendMail" type="submit" name="btnSend" value="Send Mail" class="w3-btn w3-right w3-dark-grey" style="background:green; color:white;">
                    </div>
                </div>
                <input type="hidden" id="target" name="target" value="<?php echo "mailbox.php"; ?>" />
            </form>
        </div>
    </div>
    <script>
        function opendraftModal(value) {
            // localStorage.setItem('mail_data', JSON.stringify(value));
            // location.href = 'mailbox.php'
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            console.log(value)
            document.getElementById('to').value = value?.receiver
            document.getElementById('sub').value = value?.sub
            document.getElementById('msg').value = value?.message

        }
    </script>
    <!-- insideBottom links -->
    <?php include "./includes/insideBottomLinks.php" ?>
</body>

</html>