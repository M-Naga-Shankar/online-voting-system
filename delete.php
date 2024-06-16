<?php
include("configASL.php");
$id=$_GET['del'];
mysqli_query($al,"delete from nominee where id='$id'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='manageparty.php';
</script>
