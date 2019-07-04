<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-04
 * @Email:  jpyan2906@gmail.com
 */

class Search
{
	public function linearSearch(array $array, int $needle)
	{
		foreach ($array as $key => $val) {
			if ($val === $needle) {
				return $key;
			}
		}
		return -1;
	}

	public function binarySearch(array $array, int $needle)
	{
		sort($array);
		$lIndex = 0;
		$rIndex = count($array) - 1;
		while ($lIndex <= $rIndex) {
			$mid = intdiv(($lIndex+$rIndex), 2);
			if ($array[$mid] > $needle) {
				$rIndex = $mid - 1;
			}elseif($array[$mid] < $needle){
				$lIndex = $mid + 1;
			}else{
				return $mid;
			}
		}
		return -1;
	}

	public function binarySearchMulti(array $array, int $needle)
	{
		sort($array);
		$lIndex = 0;
		$rIndex = count($array) - 1;
		$firstMapIndex = -1;
		while ($lIndex <= $rIndex) {
			$mid = intdiv(($lIndex+$rIndex), 2);
			if ($array[$mid] > $needle) {
				$rIndex = $mid - 1;
			}elseif($array[$mid] < $needle){
				$lIndex = $mid + 1;
			}else{
				$firstMapIndex = $mid;
				$rIndex = $mid - 1;
			}
		}
		return $firstMapIndex;
	}
}

$searchObj = new Search();
$testArr = [1,5,8,8,8,2,3,9];
$needle = 8;

$linearIndex = $searchObj->linearSearch($testArr,$needle);
$binaryIndex = $searchObj->binarySearch($testArr,$needle);
$binaryMultiIndex = $searchObj->binarySearchMulti($testArr,$needle);

echo "=======================\nLineay Search\n=======================\n";
echo "$linearIndex";

echo "\n=======================\nBinary Search\n=======================\n";
echo "$binaryIndex";

echo "\n=======================\nBinary Multi Search\n=======================\n";
echo "$binaryMultiIndex";


echo "\n";
