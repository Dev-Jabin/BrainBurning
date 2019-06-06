<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-06
 * @Email:  jpyan2906@gmail.com
 */

/**
 * 在数组中找两个元素，使其之和等于某个给定值
 */
function findExpectSumNum($inputArr,$target)
{
	sort($inputArr);
	$size = count($inputArr);
	$lIndex=0;
	$rIndex=$size-1;
	$resArr = array();
	while ($lIndex < $rIndex) {
		$preArr = array();
		$sum = $inputArr[$lIndex] + $inputArr[$rIndex];
		if ($sum>$target) {
			$rIndex--;
		}elseif ($sum<$target) {
			$lIndex++;
		}else{
			array_push($preArr, $inputArr[$lIndex]);
			array_push($preArr, $inputArr[$rIndex]);
			array_push($resArr, $preArr);
			$lIndex++;
			$rIndex--;
		}
	}
	return $resArr;
}

$inputArr = [1,2,3,4,5,7,8];
$target=6;
$res = findExpectSumNum($inputArr,$target);
var_dump($res);