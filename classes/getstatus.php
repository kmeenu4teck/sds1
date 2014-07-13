<?php 
include 'subscription.php';
$sid = $_POST['sid'];
$s = Subscription::getStatus();
echo $s." => ".$sid;
?>