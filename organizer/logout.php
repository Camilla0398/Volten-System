<?php
session_start();
$_SESSION['login']=="";
echo "<script>alert('You logged out from this session');</script>";
session_unset();
?>
<script language="javascript">
document.location="login.php";
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>