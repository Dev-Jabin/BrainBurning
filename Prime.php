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

function findPrime1($num)
{
	$oddArr = array();
	$cell = 3;
	if ($num<$cell) {
		return array();
	}
	while ($cell <= $num) {
		array_push($oddArr, $cell);
		foreach ($oddArr as $val) {
			if ($cell != $val && ($cell%$val)==0) {
				$delKey = array_search($cell, $oddArr);
				unset($oddArr[$delKey]);
				continue;
			}
		}
		// 过滤偶数
		$cell += 2;
	}
	return $oddArr;
}

$num = 21;
$primeArr = findPrime1($num);
foreach ($primeArr as $val) {
	echo "$val ";
}
