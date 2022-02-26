<?php
$host="localhost";
$user="root";
$password="";
$db="odrisco";
$conn=new msqli($host,$user,$password);
mysql_select_db($db);
if(isset($_post[email])){
$email=$_post['email'];
$password=$_post['password'];
$sql="select*from LOGIN where email='".email."' and password='".password."'
limit 1;
$mysql_query($sql);
if(mysql_num_rows($result)==1) {
echo "you have loggedin succussfully";
exit();
}
else{
echo "you have entered incorrect details";
exit();
}

?>