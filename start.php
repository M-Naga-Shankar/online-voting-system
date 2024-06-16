<?php
include("configASL.php");

$ele=$_GET['ele'];


mysqli_query($al,"UPDATE admin SET active=1");
?>
<script type="text/javascript">
alert("Successfully Started");
window.location='election.php';
</script>
