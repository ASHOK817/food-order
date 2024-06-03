<?php
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$address=$_GET['address'];
$amount=$_GET['amount'];
?>
<html>
<head>
<title></title>
</head>
<body style="background:url(g.jpg); background-repeat:no-repeat; background-attachment: fixed; background-size: 100% 100%;color:rgb(6, 6, 6);text-align:center;">
<table border="2" width="800">
<tr>
<td><?php echo"name"?></td><td><?php echo $name?></td>
</tr>
<tr>
<td><?php echo "email"?></td><td><?php echo $email?></td>
</tr>
<tr>
<td><?php echo "phone"?></td><td><?php echo $phone?>
</td>
</tr>
<tr>
<td><?php echo "address"?></td><td><?php echo $address?>
</td>
</tr>
<tr>
<td><?php echo "amount"?></td><td><?php echo $amount?>
</tr>
</table>
</html>
