<?php
	include_once("../common.php");

	$_SESSION['sess_iAdminUserId'] = "";
	$_SESSION["sess_vAdminFirstName"] = "";
	$_SESSION["sess_vAdminLastName"] = "";
	$_SESSION["sess_vAdminEmail"] = "";
	header("location:index.php");
	exit;
?>
