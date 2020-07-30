<?php
/* function sum ($max){
	$result = 0;
	for($i = 1; $i <= $max; $i++){
		$result += $i;
	}
	return $result;
}
echo sum(100); 
$string = "ABCDEF";
echo strlen($string);
$string = "I love Ruby!";

// Ruby という文字列を　PHP に置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string; 

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
$array = array(2,5,9,7,3,1,8,6,4);
arsort($array);
print_r($array); */
$num = 5;
$result1 = $num * 2;

function f($a,$b){
	$result2 = $a + $b;
	return $result2;
}

$arr = array(1, 3, 5 ,7, 9);
$result3 = array_product($arr);

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 arsort($arr)
 }
 return $max_number;
 }
?>
