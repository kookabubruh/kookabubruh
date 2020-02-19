<?php
//1
	echo '№1';
	echo '<br>';



function getPlus($a){
	echo ($a + 10);
}
getPlus(23);


	echo '<br>';
	echo '<br>';

//2
	echo '№2';
	echo '<br>';

function getPlus2($a){
	return $a + 10;
}
echo getPlus2(25);


	echo '<br>';
	echo '<br>';

//3
	echo '№3';
	echo '<br>';

function pythagoras($a, $b){
	return(sqrt(pow($a, 2) + pow($b, 2)));

}
echo pythagoras(6, 8);

	echo '<br>';
	echo '<br>';

//4
	echo '№4';
	echo '<br>';

		//ипотека на 10 лет на сумму 5млн рублей
function ipoteka($a, $b, $c){
	return $c*($b/$c + $a*$b) + (($a*$b * ($c-1)) / 2);
}
echo ipoteka(11.5, 5000000, 10);

	echo '<br>';
	echo '<br>';

//5
	echo '№5';
	echo '<br>';

function col(...$a){
	 $b = count($a);
	 print ($b);
}
col(1, 2, 3, 4, 5);

	echo '<br>';
	echo '<br>';

//6
echo '№6';
echo '<br>';

function uf(...$a){
	$b = array_sum($a);
	$c = count($a);
	print ($b/$c);
}
uf(1, 2, 3);

	echo '<br>';
	echo '<br>';

//7
echo '№7';
echo '<br>';

function op($num1, $num2, $operator){
	
}





//8
echo '№8';
echo '<br>';















?>