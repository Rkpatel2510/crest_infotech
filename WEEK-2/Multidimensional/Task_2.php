<?php
    $string1 = "a,b,c,d,e,f";
    $string2 = "0,,,,,,,0,1";
    $string3 = "1, 23,4,5,6, 7 , 89";
	$string4 = "987987987987987";
	
	echo "<pre>";
   	$s1 = explode(",",$string1);
   	print_r($s1);
	   echo "<br>";
	   echo "<br>";
	   echo "<br>";

	
	$s2 = str_split($string2);
	foreach ($s2 as $key => $value) {
		if ($value === ",") {
			unset($s2[$key]);
		}
	}
	print_r($s2);
	echo "<br>";
	echo "<br>";
	echo "<br>";


	$st3 = explode(",",$string3);
	$s3 = array_map('trim',$st3);
	print_r($s3);
	echo "<br>";
	echo "<br>";
	echo "<br>";


	$str4 = str_split($string4);
	print_r($str4);
?>