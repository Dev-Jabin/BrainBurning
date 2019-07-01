<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-18
 * @Email:  jpyan2906@gmail.com
 */
class Node
{
	public $data;
	public $next=null;
	public function __construct($data="")
	{
		$this->data = $data;
	}
}

function addNode($head,$data)
{
	$cur = $head;
	if ($cur->data == '') {
		$cur->data = $data;
		return;
	}
	$node = new Node($data);
	while ($cur->next != null) {
		$cur = $cur->next;
	}
	$cur->next = $node;
	$node->next=null;
}

function showNode($head)
{
	$cur = $head;
	
	while ($cur->data && $cur->data != '') {
		echo $cur->data.PHP_EOL;
		$cur=$cur->next;
	}
}

function reverseNodeTravel($head)
{
	if ($head->next == null) {
		return $head;
	}
	$prev = $head;
	$cur = $head->next;

	while ($cur) {
		$temp = $cur->next;
		$cur->next = $prev;
		$prev = $cur;
		$cur = $temp;
	}
	$head->next=null;
	return $prev;
}

function reversNodeRecur($head)
{
	if ($head->next == null) {
		return $head;
	}
	$newNode = reversNodeRecur($head->next);
	$head->next->next=$head;
	$head->next=null;
	return $newNode;
}

function test()
{
	$head = new Node();
	addNode($head,"A");
	addNode($head,"B");
	addNode($head,"C");
	addNode($head,"D");
	addNode($head,"E");
	var_dump($head);
	showNode($head);
	echo "==============================\nrevers node with Traversing\n==============================\n";
	$newNode = reverseNodeTravel($head);
	showNode($newNode);
	echo "==============================\nrevers node with Recursive\n==============================\n";
	$head2 = new Node();
	addNode($head2,"A");
	addNode($head2,"B");
	addNode($head2,"C");
	addNode($head2,"D");
	addNode($head2,"E");
	showNode($head2);
	$newNode2 = reversNodeRecur($head2);
	showNode($newNode2);
}
test();