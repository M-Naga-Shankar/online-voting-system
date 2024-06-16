<?php
include("configASL.php");
$id1=$_GET['del1'];
mysqli_query($al,"delete from voter where UserId='$id1'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='managevoter.php';
</script>
