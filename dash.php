<?php
$name ="odrisco";
?>
<html>
<head>
<link rel="stylesheet"href="dash.css">
<link rel="stylesheet"href="">
<title>userdasboud</title>
</head>
<body>
<h2><?php
echo "hello $name welcome to your dashboud";
?>
</h2>
<header>
<form action="dash.php"method="post">
<?php
echo "<h1>user $name</h1>";
?>

<input type="button"name="buy"value="buy crypto">
<br><br>
<input type="button"name="sell"value="sell crypto">
<br><br>
<input type="button"name="calculator"value="calculator">
<br><br>
<input type="button"name="market"value="crpto pricess">
<br><BR>
<input type="button"name="logout"value="earn crypto">
<br><br>
<input type="button"name="contact"value="cantact us">
<br><br>
<input type="button"name="follow"value="follow us">
<br><br>
<input type="button"name="logout"value="logout">
</form>
</header>
<?php

switch("name"){
	case "buy":
	echo "<h1>hello</h1>";
	break;
}
?>
</body>
</html>