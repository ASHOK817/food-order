<?php 
$conn=mysqli_connect("localhost","root","","electric");
if($conn)
{
    echo "Thank you for ordering";
}
else{
    echo "something went wrong";
}
$username=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['phone'];
$address=$_POST['address'];
$amount=$_POST['amount'];
//$query="CREATE DATABASE `electric`";
//mysqli_query($conn,$query);
//$query1="CREATE TABLE `dharshan`(`name` varchar(20),`email` varchar(30),`contact` varchar(20),`address` varchar(50),`amount` varchar(30))";
//mysqli_query($conn,$query1);
$query2="INSERT INTO `dharshan`(`name`,`email`,`contact`,`address`,`amount`) values('$username','$email','$contact','$address',$amount)";
mysqli_query($conn,$query2);

session_start();
$_SESSION['username']=$_POST['name'];
echo " ".$_SESSION['username']." "."Thanks for Ordering";
echo "<br>";
echo "<br>";
echo "Name : ".$username;
echo "<br>";
echo "<br>";
echo "Phone Number : ".$contact;
echo "<br>";
echo "<br>";
echo "Address : ".$address;

?>
