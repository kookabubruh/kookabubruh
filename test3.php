<?php
//a
$arr = range(1, 100);
 echo array_sum(range(1, 100));
  echo '<br>';
//b
$arr = ['a', 'b', 'c', 'd', 'e'];
	$arr = array_map('strtoupper', $arr);
	 var_dump($arr);
	  echo '<br>';
//1
$arr = ['a', 'b', 'c', 'd'];
	echo count($arr);
	 echo '<br>';
//2


//3	 
$arr = [1, 2, 3, 4, 5];
	var_dump(in_array(3, $arr));
	 echo '<br>';
//4
$arr = [1, 2, 3, 4, 5];
	echo array_sum($arr);
	 echo '<br>';
//5
$arr = [1, 2, 3, 4, 5];
	echo array_product($arr);
	 echo '<br>';
//6
$arr = [1, 2, 3, 4, 5];
$arrr = array_sum($arr) / count($arr);
 	echo $arrr;
 	 echo '<br>';
//7
$arr = range(1, 100); 
	var_dump($arr);
	 echo '<br>';
//8
$arr = range(a, z); 
	var_dump($arr);
	 echo '<br>';	 	 
//9
$arr = range(1, 9);
$str = implode('-', $arr);
	echo $str;
	 echo '<br>';
//10
$arr = range(1, 100);
$str = array_sum($arr);
	echo $str;
	 echo '<br>';
//11
$arr = range(1, 10);
$str = array_product($arr);
	echo $str;
	 echo '<br>';
//12
$arr = [1, 2, 3];
$arr1 = ['a', 'b', 'c'];
$res = array_merge($arr, $arr1);
	var_dump($res);
	 echo '<br>'; 
//13
$arr = [1, 2, 3, 4, 5,];
$result = array_slice($arr, 1, 3);
	var_dump($result);
	 echo '<br>';
//14
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 2);
	var_dump($arr);
	 echo '<br>';
//15
$arr = [1, 2, 3, 4, 5];
//$result = array_splice(input, offset);
//16
$str = [1, 2, 3, 4, 5];
$result = array_splice($arr, 3, 0, ["a", "b", "c"]);
	var_dump($str);
	 echo "<br>";
//17
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 0, ["a", "b"]);
	var_dump($arr);
	 echo "<br>";
//18 
	 echo 'задание 18';
	  echo "<br>";
$keys = ['a'=>1, 'b'=>2, 'c'=>3];
	var_dump(array_keys($keys));
	var_dump(array_values($arr));
	 echo "<br>";
//19
	 echo 'задание 19';
	  echo "<br>";
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
	var_dump(array_combine($arr1, $arr2));
	 echo "<br>";
//20
	echo 'задание 20';
	 echo "<br>";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	var_dump(array_flip($arr));
	 echo "<br>"; 
//21
	echo 'задание 21';
	 echo "<br>";
$arr = [1, 2, 3, 4, 5];
	var_dump(array_reverse($arr));
	 echo "<br>";
//22
	echo 'задание 22';
	 echo "<br>";
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	echo array_search('-', $arr);
	 echo '<br>'; 
//23
	echo 'задание 23';
	 echo "<br>";
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$str = array_search('-', $arr);
$str1 = array_splice($arr, 1, 1);
	var_dump($str1);
	 echo '<br>';
//24
	echo 'задание 24';
	 echo "<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
$res = array_replace($arr, [0 => '!', 3 => '!!']);
	print_r($res);
	 echo "<br>";
//25
	echo 'задание 25';
	 echo "<br>";	 
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
	print_r($arr);
 echo "<br>";
rsort($arr);
	print_r($arr);
 echo "<br>";	
//26
	echo 'задание 26';
	 echo "<br>";
$arr = [ 'a'=>1, 'b'=>2, 'c'=>3];
	print_r(array_rand($arr));
	 echo "<br>"; 	  
//27
	echo 'задание 27';
	 echo "<br>";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$key = array_rand($arr);
	print_r($arr[$key]);
	 echo "<br>";
//28
	echo 'задание 28';
	 echo "<br>";
$arr = ['a', 'b', 'c'];
shuffle($arr);
	print_r($arr);
	 echo "<br>";
//29
	echo 'задание 29';
	 echo "<br>";	 
$arr = range(1, 25);
shuffle($arr);
	print_r($arr);
	 echo "<br>";
//30
	echo 'задание 30';
	 echo "<br>";	 	 
$arr = range('a', 'z');
shuffle($arr);
	print_r($arr);
	 echo "<br>";
//31
	echo 'задание 31';
	 echo "<br>";	
$arr = range('a', 'z');
shuffle($arr);
$arr1 = array_slice($arr, 1, 6);
	print_r($arr1);
	 echo "<br>";
//32
$arr = ['a', 'b', 'c', 'b', 'a'];
	var_dump(array_unique($arr));

		echo "<br><br>";
//33
$arr = [1, 2, 3, 4, 5];
$arr1 = array_shift($arr); 
$arr2 = array_pop($arr);
	var_dump($arr1, $arr2);

		echo "<br><br>";
//34
$arr = [1, 2, 3, 4, 5];
$arr1 = array_unshift($arr, 0);
$arr2 = array_push($arr, 6);
	var_dump($arr);

		echo "<br><br>";
//35
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$arr1 = '';
while (count($arr) > 0){
	$arr1 .= array_shift($arr);
	$arr1 .= array_pop($arr);
}
	echo $arr1;

		echo "<br><br>";
//36
$arr = ['a', 'b', 'c'];	
$arr1 = array_pad($arr, 6, '-');
	var_dump($arr1);

		echo "<br><br>";
//37
$arr = array_fill(0, 10, 'x');
	var_dump($arr);

		echo "<br><br>";
//38
$arr = range(1, 20);
	var_dump(array_chunk($arr, 4));

		echo "<br><br>";
//39
$arr = ['a', 'b', 'c', 'b', 'a'];
	var_dump(array_count_values($arr));	

		echo "<br><br>";
//40
$arr = [1, 2, 3, 4, 5];
	var_dump(array_map('sqrt', $arr));

		echo "<br><br>";
//41
$arr = ['<b>php</b>', '<i>html</i>'];
	var_dump(array_map('strip_tags', $arr));

		echo "<br><br>";
//42
$arr = [' a ', ' b ', ' с '];
	var_dump(array_map('trim', $arr));

		echo "<br><br>";
//43
$arr = [1, 2, 3, 4, 5];
$arr1 = [3, 4, 5, 6, 7];
$arr2 = array_intersect($arr, $arr1);
	var_dump($arr2);

		echo "<br><br>";
//44
$arr = [1, 2, 3, 4, 5];
$arr1 = [3, 4, 5, 6, 7];
$arr2 = array_diff($arr, $arr1);
$arr3 = array_diff($arr1, $arr);
	var_dump($arr2, $arr3);

		echo "<br><br>";
//45
$arr = '1234567890';
$arr1 = str_split($arr);
	echo array_sum($arr1);

		echo "<br><br>";
//46
$arr = range(1, 26);
$arr1 = range('a', 'z');
	var_dump(array_combine($arr, $arr1));

		echo "<br><br>";
//47
$arr = range(1, 9);
 var_dump(array_chunk($arr, 3));	

		echo "<br><br>";
//48
$arr = [1, 2, 4, 5, 5];
for($i = count($arr) - 1; $i >= 0; $i--){ 
if($arr[$i] < max($arr)){ 
echo $arr[$i]; 
break; 
}
}



































?>