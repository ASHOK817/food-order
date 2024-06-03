<?php
session_start();
$_SESSION['username']=$_POST['name'];
if(isset($_SESSION['username'])){
	echo "Success";
}
else{
	echo "Not success";
}
?>
