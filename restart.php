<?php
include("configASL.php");

$ele=$_GET['ele'];


mysqli_query($al,"UPDATE voter SET Status=1");
?>
<script type="text/javascript">
alert("Successfully restart");
window.location='election.php';
</script>