<?php
$host="localhost";
$user="root";
$password="";
$db="zedbitcoins";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_post[username]){
$username=$_post['username'];
$password=$_post['password'];
$sql="select*from loginform where user='".username."' and pass='".password."'
limit 1;
$mysql_query($sql);
if(mysql_num_rows($result)==1){
echo YOU HAVE SUCCESSFULLY LOGEDIN";
exit();
}
else{
echo "ayou have entered incorrect details"
exit();
}
}
?>
<!doctype html>
<html>
<head>
<title>login</title/>

<link rel="stylesheet"href="style1.css"/>
</head>
<body>
<div class="container">
<img src="btc.jpg"/>
<form method="post"action="#">
<div class="form_input">
<input type="text"name="username"placeholder="usrename"/>
</div>
<div class="form_input">
<input type="password"name="password"placeholder="enter password"/>
</div>
<input type="submit"name="submit"value="login"class="btn-login"/>
</form>

</div>




</body>
