<?php
include_once('config/initialize.php');
$session->logout();
header("Location: index.php");
exit();
?>