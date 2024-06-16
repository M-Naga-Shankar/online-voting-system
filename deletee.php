<?php
include("configASL.php");
$ele=$_GET['ele'];
mysqli_query($al,"delete from election where el_id='$ele'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='election.php';
</script>
