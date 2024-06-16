<?php
include("configASL.php");
session_start();
$vote=$_GET['vote'];
$aid1=$_SESSION['aid'];
mysqli_query($al,"UPDATE nominee SET Votes=Votes+1 where Id='$vote'");
mysqli_query($al,"UPDATE voter SET Status=0 where UserId='$aid1'");
?>
<script type="text/javascript">
alert("Successfully Voted");
window.location='exit1.php';
</script>
