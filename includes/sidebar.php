<div class="sidebar" id="sidebar">
    <button id="modal_open_btn" type="button"> <i class="fa fa-plus" aria-hidden="true"></i> New Message</button>
    <ul>
        <li id="inbox"><a id="inbox_a" href="inbox.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Inbox</a></li>
        <li id="draft"><a id="draft_a" href="drafts.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Drafts</a></li>
        <li><a href="#"> <i class="fa fa-inbox" aria-hidden="true"></i> Outbox</a></li>
        <li id="sent"><a id="sent_a" href="sentmails.php"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Sent</a></li>
        <li><a href="#"> <i class="fa fa-trash" aria-hidden="true"></i> Trash</a></li>
        <li><a href="#"> <i class="fa fa-archive" aria-hidden="true"></i> Archieve</a></li>
    </ul>
    <div class="logout">
        <button onclick="window.location.href='./actions/logout.php'" id="primaryBtn">
            <i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
    </div>
</div>
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
    window.onload = function() {
        if (window.location?.pathname?.includes('inbox.php')) {
            document.getElementById('inbox').style = "background-color:#6d4aff;";
            document.getElementById('inbox_a').style = "color:white;"
        } else if (window.location?.pathname?.includes('sentmails.php')) {
            document.getElementById('sent').style = "background-color:#6d4aff;";
            document.getElementById('sent_a').style = "color:white;"
        } else if (window.location?.pathname?.includes('sentmails.php')) {
            document.getElementById('draft').style = "background-color:#6d4aff;";
            document.getElementById('draft_a').style = "color:white;"
        }

    }
</script>