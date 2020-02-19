<?php
$dan = 2;
$dan2 = 5;
$dan3 = $dan + $dan2;
 echo $dan3;
 echo '<br>';


 //$str = "Иванов Иван Иванович";
 $str2 = explode(" ", "Ivanov Ivan Ivanovich");
 $str3 = substr($str2[1], 0, 1);
 $str4 = substr($str2[2], 0, 1);

 echo $str2[0]." ".$str3.". ".$str4.". ";
echo '<br>';
 
 echo strtoupper ('danya hui');
echo '<br>';
 
 echo ucfirst(strtolower('danya huy'));
echo '<br>';

 $arr = explode('-', '31-12-2030');
 echo $arr[2].'.'.$arr[1].'.'.$arr[0];
echo '<br>';

echo strtoupper ('php');
echo '<br>';
 
echo strtolower ('PHP');
echo '<br>';

echo ucfirst(strtolower('london'));
echo '<br>'; 

echo ucwords ('London Is The Capital Of Great Britain');
echo '<br>';

echo ucfirst(strtolower('LONDON'));
echo '<br>';

echo strlen ('html css php');
echo '<br>';

$pas = 'dgdfgd';
$pas2 = strlen($pas);
if ($pas2 > 5 and $pas2 < 10){
	echo "Пароль подходит";
	}else{
    echo "false";
}
echo '<br>';

$str = "html css php";
$str1 = substr($str, 0,-7);
$str2 = substr($str, 5,-3); 
$str3 = substr($str, 8);
 echo $str1;
  echo '<br>';
 echo $str2;
  echo '<br>';
 echo $str3;
  echo '<br>';

$str = "hello";
$str1 = substr ($str, 2);
 echo $str1;
$srt = "";

 echo '<br>';
 
$str = "http://sadklgjasdflkgjsdf";
if (substr($str, 0, 7) == "http://"){
	echo "yes";
	}else{
		echo "no";
}
  echo '<br>';

$str = "http://sadklgjasdflkgjsdf";
if (substr($str, 0, 7) == "http://" or (substr($str, 0, 7) == "https://")){
	echo "yes";
	}else{
		echo "no";
}
  echo '<br>';

$str = "http://sadklgjasdflkgjsdf.png";
if (substr($str, -4, 4) == ".png" or substr($str, -4, 4) == ".jpg"){
	echo "yes";
	}else{
		echo "no";
}
  echo '<br>';

$str = "http://sadklgjasdflkgjsdf.png";
if (substr($str, -4, 4) == ".png"){
	echo "yes";
	}else{
		echo "no";
}
  echo '<br>';

 //$str = "fjghdijgdkg";
 //$str1 = strlen($str);
 //if ($substr > 5){
 	//$str2 = substr($str, 5);
 	//echo $str2;
 	//echo "...";
 	//echo $str2
 //}else if ($str1 <==5){
 	//echo $str;
 //}
 //echo '<br>';

$dat = '31.12.2013';
$dat1 = str_replace ('.', '-', $dat);
 echo $dat1;
  echo '<br>';

$str = 'ahhdsbbcsdsdc';
$str1 = str_replace(['a', 'b', 'c'], [1, 2, 3,], $str);
 echo $str1; 
  echo '<br>';

$str = '1a2b3c4b5d6e7f8g9h0';
$str1 = str_replace(['1','2','3','4','5','6','7','8','9','0'], [], $str);
 echo $str1;
  echo '<br>';

$str = 'aaabbbccc';
$str1 = strtr($str, ['a' =>'1', 'b' =>'2', 'c' =>'3']);
 echo $str1;
  echo '<br>';

$str = 'aaaabbbbcccc';
$str1 = strtr($str, 'abc', '123');
 echo $str1;
  echo '<br>';

$str = 'qwertyabcdefgh';
$str1 = substr_replace($str, '!!!!!', 2, 5);
 echo $str1;
  echo '<br>';

$str = 'abc abc abc';
$str1 = strpos($str, 'b');
 echo $str1;
  echo '<br>';

$str = 'abc abc abc';
$str1 = strpos($str, 'b', 6);
 echo $str1;
  echo '<br>';

$str = 'abc abc abc';
$str1 = strpos($str, 'b', 3);
 echo $str1;
  echo '<br>';

$str = 'aaa aaa aaa aaa';
$str1 = strpos($str, ' ', 6);
 echo $str1;
  echo '<br>';

$str = 'abcabcabc';
$str1 = strrpos($str, '..');
 if ($str1 === 0) {
 	echo 'false';
 }else{
 	echo 'true';
 }  

  echo '<br>';

$str = 'html css php';
$str1 = explode(' ', $str);
 var_dump($str1); 
   echo '<br>';

$str = ['html', 'css', 'php'];
$str1 = implode('-', $str);
 echo $str1;
  echo '<br>';

$date = '2013-12-31';
$date1 = explode('-', $date);
 echo $date1[2].'.'.$date1[1].'.'.$date1[0];
  echo '<br>';

$str = '1234567890';
$str1 = str_split($str, 2);
 var_dump ($str1);
   echo '<br>';

$str = '1234567890';
$str1 = str_split($str, 1);
 var_dump ($str1);
   echo '<br>';

$str = '1234567890';
$str1 =str_split($str, 2);
 echo implode('-',$str1);
  echo '<br>';

$str = ' hello ';
 var_dump(trim($str));
  echo '<br>';

$str = '/php/';
 var_dump(trim($str, '/'));
   echo '<br>';    

$str = rtrim('слова слова слова', '.');
 echo $str, '.';
  echo '<br>'; 

$str = '12345';
$str1 = strrev($str);
 echo $str1;
  echo '<br>';

$str = 'levels';
if (strrev($str) == $str){
	echo 'yes';
}else{
	echo 'no';
}
//38
$str = 'danya hui';
$str1 = str_shuffle($str);
 echo $str1;
  echo '<br>';

//39
$dan = str_shuffle('qwertyuiopasdfghjklzxcvbnm');
 echo substr($dan, 0, 6);
 	echo '<br>';
//40

echo number_format(12345678, 0, '', ' ');
 echo '<br>';
//41

for ($i=0; $i <= 9; $i++) { 
	echo str_repeat('x', $i) . '<br>';
}
//42
for ($i=0;$i<=9;$i++){
	
		echo str_repeat($i, $i). "<br>";
	}
	echo '<br>';

//43
$str =  'html, <b>php</b>, js';
$str1 = strip_tags($str);
 echo $str1;
  echo '<br>';
//44
$str = 'retgu<b>hrig</b>uf<i>t</i>hj';
$str1 = strip_tags($str, '<b><i>');
 echo $str1;
  echo '<br>';   
//45
echo htmlspecialchars('html, <b>php</b>, js');
  echo '<br>'; 
//46
echo ord('a');
 echo '<br>';
echo ord('b');
 echo '<br>'; 
echo ord('c');
 echo '<br>'; 
echo ord(' ');
 echo '<br>';  
//47
//допустим, что я это сделал
//48    
echo chr(33);
 echo '<br>';
//49
$str = 68;
echo chr($str);
 echo '<br>';
//50




//51
$str = 'g';
if (ord($str) >64 and ord($str) <91){
	echo 'Заглавная буква';
	}else if (ord($str)  >96 and ord($str) <123){
	echo 'Прописная буква';	

}
	echo'<br>';
//52
$str = 'ab-cd-ef';
$str1 = strchr($str, '-');
 echo $str1;
  echo'<br>';
//53
echo strrchr('ab-cd-ef', "-");
	echo'<br>';
//54
echo strstr('ab--cd--ef', '--');  
	echo'<br>'; 
//55
$str = 'var_test_text';
//$str1 = str_replace('_', ' ', $str);
//$str2 = ucwords($str1);
//$str3 = lcfirst($str2);
//$str4 = str_replace(' ', '', $str3);

	//echo $str4;

$str4 = str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $str))));

	echo $str4;

		echo '<br>';
//56
$arr = array(12, 13, 14, 23);
foreach ($arr as $value) {
	if (strpos($value, "3") !== false) {
		echo $value;
	}
}	





?>