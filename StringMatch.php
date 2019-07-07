<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-15
 * @Email:  jpyan2906@gmail.com
 *
 * 基于字符串匹配的一些列操作
 */

/**
 * 给定一个模板字符串:tempStr和一个目标字符串:tarStr
 * 求出tarStr在tempStr中首次出现的位置
 * strpos-查找字符串首次出现的位置
 */
function findStrFirstIndex($tempStr,$tarStr){
	$pos = strpos($tempStr, $tarStr);

	if ($pos === false) {
		echo "not found\n";
	}else{
		echo "index::$pos\n";
	}
}

/**
 * 给定一个模板字符串:tempStr和一个目标字符串:tarStr
 * 求出tarStr在tempStr中最后一次出现的位置
 * strpos-查找字符串首次出现的位置
 */

function findStrLastIndex($tempStr,$tarStr){
	$pos = strrpos($tempStr, $tarStr);

	if ($pos === false) {
		echo "not found\n";
	}else{
		echo "index::$pos\n";
	}
}

/**
 * 给定一个模板字符串:tempStr和一个目标字符串:tarStr
 * 求出tarStr在tempStr中第一次出现位置之前的字符，不包含tarStr
 */

function findStrFirst($tempStr,$tarStr){
	$beforeStr = strstr($tempStr, $tarStr,true);
	if ($beforeStr === false) {
		echo "not found\n";
	}else{
		echo "Str::$beforeStr\n";
	}
}

/**
 * 给定一个模板字符串:tempStr和一个目标字符串:tarStr
 * 求出tarStr在tempStr中第一次出现位置之后的字符，包含tarStr
 */

function findStrLast($tempStr,$tarStr){
	$afterStr = strstr($tempStr, $tarStr);
	if ($afterStr === false) {
		echo "not found\n";
	}else{
		echo "Str::$afterStr\n";
	}
}

/** 
* 给定一个模板字符串:tempStr和一个目标字符串:tarStr
* 求出tarStr在tempStr中首次次出现的位置
* 通过substr实现
* strpos-查找字符串首次出现的位置
*
* 通过在tempStr中移动截取位置进行匹配
*/

function findStrFirIndex($tempStr,$tarStr){
	$tarLen = strlen($tarStr);
	$forLen = strLen($tempStr)-$tarLen;
	for ($i=0; $i < $forLen; $i++) { 
		$subStr = substr($tempStr, $i,$tarLen);
		if ($subStr == $tarStr) {
			echo "Index::$i\n";
			return $i;
		}
	}
}

//字符串反转
function reverseStr1($str)
{
	$resStr='';
	$len = strlen($str);
	for ($i=$len-1; $i >= 0 ; $i--) { 
		$resStr .= $str[$i];
	}
	echo "$resStr\n";
	return $resStr;
}

function reverseStr2($str)
{
	$resStr='';
	$len = strlen($str);
	for ($i=$len-1; $i >= 0 ; $i--) { 
		$resStr .= substr($str, $i, 1);
	}
	echo "$resStr\n";
	return $resStr;
}

$tarStr = 'ab';
$tempStr = 'scdabdabes';
findStrFirstIndex($tempStr,$tarStr);
findStrLastIndex($tempStr,$tarStr);
findStrFirst($tempStr,$tarStr);
findStrLast($tempStr,$tarStr);
findStrFirIndex($tempStr,$tarStr);
reverseStr1($tempStr);
reverseStr2($tempStr);