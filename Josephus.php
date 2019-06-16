<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-16
 * @Email:  jpyan2906@gmail.com
 */
function kingOfMonkey($nums,$killNum){
	//初始化一个数组，代表所有猴子，
	//True代表猴子还在列
	//False代表猴子已经被淘汰
	$monkeys = [];
	for ($i=0; $i < $nums; $i++) { 
		$monkeys[$i] = true;//初始化，所有猴子都活着
	}

	$monkeyLeft = $nums;//还有多少幸存的猴子
	$count = 0;//计数器，每过一个人加一，加到killNum时归零
	$index = 0;//标记从哪里开始

	while ($monkeyLeft > 1) {
		if ($monkeys[$index]) {//该猴子还在，进行计数
			$count++;

			if ($count == $killNum) {
				//如果这个猴子需要被kill，需要做三件事
				//1.kill这只猴子
				//2.计数器从0开始
				//3.刷新猴子剩余数量
				$monkeys[$index] = false;
				$count = 0;
				$monkeyLeft--;
			}
		}
		$index++;

		if ($index == $nums) {
			//如果数到尽头之后，index从0开始继续数，想象成一个圆环
			$index =0;
		}
	}
	// 最后那个值为true的猴子就是MonkeyKing
	for ($j=0; $j < count($monkeys); $j++) { 
		if ($monkeys[$j]) {
			return $j+1;
		}
	}
	return null;
}

$num = 10;
$killNum = 3;
$kingNum = kingOfMonkey($num,$killNum);
echo "King of Num::$kingNum\n";