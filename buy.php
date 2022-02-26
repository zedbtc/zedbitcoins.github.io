<!doctype html>
<html>
<head><title>buy crypto</title>
<meta charset="utf-8">
</head>
<body>
<h1>zedbitcoins is always read for you always</h1>
<form action="buy.php"method="post">
<h2>simple online crypo calculato</h2>
<label for="currence">choose the currence you want to buy </label>
<br>
BTC<input type="radio"name="radio"value="btc">
ETHERIUM<input type="radio"name="radio"value="ethe">
LITCOINS<input type="radio"name="radio"value="lite">
STELLA<input type="radio"name="radio"value="stella">
DOGECOINS<input type="radio"name="radio"value="doge>
pi net<input type="radio"name="radio"value="pi">
tron<input type="radio"name="radio"value="tron">
bnb<input type="radio"name="radio"value="bnb">
bnb diamond<input type="radio"name="radio"value="bnb d">
<br>write coin to buy in full
<input type="text"name="crypto"><br>
amout in dollars
<input type="number"step="0.01"name="amout"placeholder="$">
<input type="submit"value="convert cash to crypto">
</form><br><br>
<?php
$crypto = $_POST["crypto"];
$amout =  $_POST["amout"];
$btc = 0.00000009;
$ethe = 0.00003;
$lite = 0.0002;
$stella = 0.01;
$pi = 0.5;
$tron = 3;
$bnb = 1;
$bnbd = 10;
switch($amout && $crypto){
	case "bitcoin":
	echo $amout * $btc;
	break;
	case "etherium":
	echo $amout * $ether;
	break;
	case "litecoins":
	echo $amout * $lite;
	break;
	case "stella":
	echo $amout * $stella;
	break;
	case "tron":
	echo $amout * $tron;
	break;
	case "pi network":
	echo $amout * $pi;
	break;
	case "bnb":
	echo $amout * $bnb ;
	break;
case "bnb diamond":
echo $amout* $bnbd;
break;
	default:
	echo "you have not entered anything";
}
?><br><br>
<h1> the website is currently on the testing stage<br>
so buying of crypto is not possible for now<br>
kindly be in touch with us on the official relaese date</h1>
</body>
</html>









