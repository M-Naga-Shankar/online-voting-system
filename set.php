<?php
include("configASL.php");

$ele=$_GET['ele'];


mysqli_query($al,"UPDATE admin SET ele='$ele'");
?>
<script type="text/javascript">
alert("Successfully Add");
window.location='election.php';
</script>
