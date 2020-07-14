<html>
<head>
<title>trip</title>
</head>
<body>
<form method="get">
City:<input type="text" name="destination"/><br/>
<input type="submit" value="Check">
</form>
<?php
$destination=$_GET["destination"];
Switch ($destination){
case "Las Vegas":
echo "Bring an extra $500";
break;
case "Amsterdam":
echo "Bring an open mind";
break;
case "Egypt":
echo "Bring 15 bottles of SPF 50 Sunscreen";
break;
case "Tokyo":
echo "Bring lots of money";
break;
case "Caribbean Islands":
echo "Bring a swimsuit";
break;
}
?>
</body>
</html>