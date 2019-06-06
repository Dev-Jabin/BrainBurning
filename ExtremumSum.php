<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-06
 * @Email:  jpyan2906@gmail.com
 *
 * 求极值之和
 * 输入 [4,1,8,2,5]
 * 计算输出 60
 */

function findExtremumSum($arr)
{
	$size = count($arr);
	$sum=$max=$min=0;
	$tempArr=array();
	$k = 0;
	while ($k<$size) {
		for ($i=$k,$count=1; $i < $size; $i++,$count++) { 
			$tempArr=array_slice($arr, $k,$count);
			$max=max($tempArr);
			$min=min($tempArr);
			$extremum = $max - $min;
			$sum += $extremum;
		}
		$k++;
	}
	return $sum;
}
$arr = [4,1,8,2,5];
echo "Extremum Sum::".findExtremumSum($arr)."\n";
