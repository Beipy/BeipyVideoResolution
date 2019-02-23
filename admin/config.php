<?php
session_start();
error_reporting(0);
include('../data/beipy.inc.php'); 
define('SYSPATH',$aik['path']);
$rep='foot';
if($_SESSION['admin_aik']!==base64_decode('aHR0cDovL2JlaXB5LmNvbS8=')){
	header("location: ./login.php");
	exit;
}
$nav='';
function md5ff($str=1){
	return md5($str.'ff371');
}
?>