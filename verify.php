
<?php
$email = $_POST["email"];
$password =$_POST["password"];
$conn = new mysqli('localhost','root','','odrisco');
if($conn->connect_error){
die('connection failed :'.$conn->connect_error);
}else{
	$stmt =$conn->prepare("insert into login(email,password)
	value(?,?)");
	$stmt->bind_param("ss",$email,$password);
	$stmt->execute();
echo "user regstration is successful enjoy world's  number one 
crypto tradind platform $firstname $lastname ";
$stmt->close();
$conn->close();	
}
?>
</body>
</html>