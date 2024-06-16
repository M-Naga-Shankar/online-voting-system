<?php
include("configASL.php");

$ele=$_GET['ele'];


mysqli_query($al,"UPDATE admin SET active=0");
?>
<script type="text/javascript">
alert("Successfully Stopped");
window.location='election.php';
</script>