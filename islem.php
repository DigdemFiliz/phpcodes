<html>
<body>

<?php

$s1=$_POST["sayi1"];
$s2=$_POST["sayi2"];
$islem=$_POST["islem"];

switch($islem){
case "+":
   $sonuc=$s1+$s2;
   break;
case "-":
   $sonuc=$s1-$s2;
   break;
case "*":
   $sonuc=$s1*$s2;
   break;
default:
   $sonuc=$s1/$s2;
   break;
}

echo "Sonuc:$sonuc";



?>
</body>
</html>