<?php
$durum=30;
if($durum>-30 && $durum<=-10)
	echo"Çok soğuk";
else if($durum>-10 && $durum<=0)
	echo"Soğuk";
else if($durum>0 && $durum<=10)
	echo"Serin";
else if($durum>10 && $durum<=30)
	echo"Sıcak";
else
	echo"Çok Sıcak";
?>