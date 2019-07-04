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

	//二分查找遍历方式
	public function binarySearch1(array $array, int $needle)
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

	//二分查找递归方式
	public function binarySearch2(array $array, int $needle,int $lIndex, int $rIndex)
	{
		sort($array);
		$size = count($array);
		$mid = intval(($lIndex+$rIndex)/2);
		if ($lIndex>=$rIndex) {
			return -1;
		}
		if ($needle == $array[$mid]) {
			return $mid;
		}elseif($needle >= $array[$mid]){
			return $this->binarySearch2($array,$needle,$mid+1,$size-1);
		}else{
			return $this->binarySearch2($array,$needle,0,$mid-1);
		}
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
$binaryIndex1 = $searchObj->binarySearch1($testArr,$needle);
$binaryIndex2 = $searchObj->binarySearch2($testArr,$needle,0,count($testArr)-1);

$binaryMultiIndex = $searchObj->binarySearchMulti($testArr,$needle);

echo "=======================\nLineay Search\n=======================\n";
echo "$linearIndex";

echo "\n=======================\nBinary1 Search\n=======================\n";
echo "$binaryIndex1";

echo "\n=======================\nBinary2 Search\n=======================\n";
echo "$binaryIndex2";

echo "\n=======================\nBinary Multi Search\n=======================\n";
echo "$binaryMultiIndex";


echo "\n";
