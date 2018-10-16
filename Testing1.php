<?php
$true = "true";
$false = "false";
$var1=$_POST['mat1'];
$var2=$_POST['mat2'];
$var3=$_POST['select'];

if ($var1=="true"&&$var3=="and"&&$var2=="true"){
	// echo 1 && 1;
	echo "true && true = $true";
}
else if ($var1=="true"&&$var3=="and"&&$var2=="false"){
	// echo 1 && 0;
	echo "true && false = $false";
}
else if ($var1=="false"&&$var3=="and"&&$var2=="true"){
	// echo 0 && 1;
	echo "false && true = $false";
}
else if($var1=="false"&&$var3=="and"&&$var2=="false"){
	// echo 0 && 0;
	echo "false && false = $false";
}

if ($var1=="true"&&$var3=="or"&&$var2=="true"){
	// echo 1 || 1;
	echo "true || true = $true";
}
else if ($var1=="true"&$var3=="or"&$var2=="false"){
	// echo 1 || 0;
	echo "true || false = $true";
}
else if ($var1=="false"&&$var3=="or"&&$var2=="true"){
	// echo 0 || 1;
	echo "false || true = $true";
}
else if($var1=="false"&&$var3=="or"&&$var2=="false"){
	// echo 0 || 0;
	echo "false || false = $true";
}

if ($var1=="true"&&$var3=="xor"&&$var2=="true"){
	// echo 1 Xor 1;
	echo "true Xor true = $false";
}
else if ($var1=="true"&&$var3=="xor"&&$var2=="false"){
	// echo 1 Xor 0;
	echo "true Xor false = $true";
}
else if ($var1=="false"&&$var3=="xor"&&$var2=="true"){
	// echo 0 Xor 1;
	echo "false && true = $true";
}
else if($var1=="false"&&$var3=="xor"&&$var2=="false"){
	// echo 0 Xor 0;
	echo "false && false = $false";
}

if ($var3=="!"&&$var2=="true"){
	// echo !1;
	echo "! true = $false";
}
else if ($var3=="!"&&$var2=="false"){
	// echo !0;
	echo "! false = $true";
}
?>
