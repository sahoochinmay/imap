<div class="sidebar" id="sidebar">
    <button> <i class="fa fa-plus" aria-hidden="true"></i> New Message</button>

    <ul>
        <li id="inbox"><a id="inbox_a" href="inbox.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Inbox</a></li>
        <li id="draft"><a id="draft_a" href="drafts.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Drafts</a></li>
        <li><a href="#"> <i class="fa fa-inbox" aria-hidden="true"></i> Outbox</a></li>
        <li><a href="#"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Sent</a></li>
        <li><a href="#"> <i class="fa fa-trash" aria-hidden="true"></i> Trash</a></li>
        <li><a href="#"> <i class="fa fa-archive" aria-hidden="true"></i> Archieve</a></li>
    </ul>
</div>
<script>
    window.onload = function() {
        if (window.location?.pathname?.includes('inbox.php')) {
            document.getElementById('inbox').style = "background-color:#6d4aff;";
            document.getElementById('inbox_a').style = "color:white;"
        }
    }
</script>