<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-16
 * @Email:  jpyan2906@gmail.com
 *
 * 查找数组中出现频率最高的元素
 * 桶排序思想
 */

function findNum($nums){
	$maxNum = max($nums);
	$size = count($nums);
	$bucketArr = array_fill(0, $maxNum+1, 0);
	$resArr = [];
	for ($i=0; $i < $size; $i++) { 
		$bucketArr[$nums[$i]]++;
	}
	$maxNum = max($bucketArr);

	while (array_search($maxNum, $bucketArr) !== false) {
		$maxNumIndex = array_search($maxNum, $bucketArr);
		$resArr[] = $maxNumIndex;
		unset($bucketArr[$maxNumIndex]);
	}
	return $resArr;
}

$nums = [1,2,2,2,2,2,2,3,3,3,4,4,4,4,4,4];
$frequencyNum = findNum($nums);
var_dump($frequencyNum);
