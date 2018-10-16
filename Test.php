<?php
$var1=$_POST['mat1'];
$var2=$_POST['mat2'];
$var3=$_POST['select'];
if($var1==""){
	echo "Anda belum memasukan nilai var1";
}
else if($var2==""){
	echo "Anda belum mengisi nilai var2";
}
if($var3=="+"){
	echo $var1+$var2;
}
	else if($var3=="-"){
	echo $var1-$var2;
}
	else if ($var3=="*"){
	echo $var1*$var2;
}
	else if ($var3=="/"){
	echo $var1/$var2;
}
	else if ($var3=="%"){
	echo $var1%$var2;
}
?>