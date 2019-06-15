<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-07
 * @Email:  jpyan2906@gmail.com
 *
 * 求素数
 * 质数又称素数。指在一个大于1的自然数中，除了1和此整数自身外，
 * 不能被其他自然数整除的数
 */

function isPrime1($num)
{
	if ($num<2) {
		return false;
	}

	for ($i=2; $i < $num; $i++) { 
		if ($num%$i == 0) {
			return false;
		}
	}
	return true;
}

function isPrime2($num)
{
	if ($num == 1) {
		return false;
	}elseif ($num == 2) {
		return true;
	}

	for ($i=3; $i < $num; $i +=2) {
		if ($num%2==0) {
			return false;
		}
		if (($num%$i)==0)
			return false;
	}
	return true;
}

function isPrime3($num)
{

}

function findPrime($num)
{
	$primeArr = array();
	$tar=1;
	while ($tar <= $num) {
		if (isPrime2($tar)) {
			array_push($primeArr, $tar);
		}
		$tar++;
	}
	return $primeArr;
}

$num = 21;
$primeArr = findPrime($num);
foreach ($primeArr as $val) {
	echo "$val ";
}
echo "\n";
// $primeArr2 = findPrime2($num);
// foreach ($primeArr2 as $val) {
// 	echo "$val ";
// }
