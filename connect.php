<?php
$firstname =$_POST['firstname'];
$lastname  =$_POST['lastname'];
/*$Gender    =$_POST['gender'];
$email     =$_POST['email'];
$password  =$_POST['password'];
$number    =$_POST['number'];
//database for zedbtc
$conn = new mysqli('localhost','root','','odrisco');
if($conn->connect_error){
die('connection failed :'.$conn->connect_error);
}else{
	$stmt =$conn->prepare("insert into registration(firstname,lastname,gender,email,password,number)
	value(?,?,?,?,?,?)");
	$stmt->bind_param("sssssi",$firstname,$lastname,$Gender,$email,$password,$number);
	$stmt->execute();*/
echo "<h1>user regstration is not valid for now as the website is 
under maintainance enjoy world's  number one 
crypto tradind platform $firstname $lastname</h1><br><br>";
echo "<H1>PLEASE CONNECT WITH US ON SOCIAL NETWORKS TO BUY OR SELL CRYPTO<br><br></h1>";
/*$stmt->close();
$conn->close();	
}*/
include"notice.php";
?>

<?PHP
/*
<html>
<head><title>
verify</title></head>
<body>
<form action="verify.php"method="post">
<h1>creating your dashboud now</h1>
re-enter<input type="text"name="email"placeholder="email"required/>  
re-password<input type="text"name="password"required/>
<br><br><Br><Br><input type="submit"value="verify"/>
</form>
</body>
</html>
*/
?>
