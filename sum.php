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
print_r($array); 


1.引数に数値を指定して実行すると、
数値を2倍にして返す関数を作成してください*/
$num = 5;
$result1 = $num * 2;
echo $result1;
echo "\n";

/*2.$a と $b を仮引数に持ち、　$a と $b
を足した結果を返す関数を作成してください。*/
function f($a,$b){
	$sum = $a + $b;
	return $sum;
}
$result = f(8,9);
echo $result;
echo "\n";

/*3.$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) 
を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function all($arr){
	$result = 1;
	foreach($arr as $a){
		$result *= $a;
	}
	echo $result;
}
all (array(1, 3, 5 ,7, 9) );
echo "\n";
/*4.【応用】　次のプログラムは、配列の中で1番大きい値を返す
max_array という関数を実装しようとしています。
途中の部分を完成させてください。*/
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
	if ($max_number < $a){
		$max_number == $a;
	}
	} 
	 return $max_number;
 }
 echo max_array (array(20, 5, 8, 2));
 echo "\n";
/* 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
strip_tags
array_push
array_merge
time, mktime
date*/
$text = '<h1><a hrel="https://tech-boost.jp/common/books/322?course=1">php4</a>関数を理解しよう</h1>';
echo strip_tags($text);
echo "\n";

$array = [100, 200, 300];
array_push($array, 400, 500);
print_r($array);
echo "\n";

$abc = ["a", "b", "c", "d"];
$add_abc =["d", "e", "f", "g"];
$result = array_merge($abc,$add_abc);
print_r($result);
echo "\n";

echo time();
echo "\n";
$time = mktime();
  print_r(date('Y年m月d日h時i分s秒'));
echo "\n";

echo date('本日はY年m月j日です。');

 ?>