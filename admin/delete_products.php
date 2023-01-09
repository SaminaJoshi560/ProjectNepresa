<?php
include('includes/dbconnection.php');
$id=$_POST["ID"];
$query="DELETE * FROM tblproduct WHERE ID='$id'";
?>

<script type="text/javascript">
    window.location="listed-properties.php";
</script>