<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-15
 * @Email:  jpyan2906@gmail.com
 *
 * 用两个栈实现一个队列
 */
class Stack
{
	private $items;

	public function __construct()
	{
		$this->items = array();
	}

	public function push($item)
	{
		array_push($this->items, $item);
	}

	public function pop()
	{
		return array_pop($this->items);
	}

	public function isEmpty()
	{
		return count($this->items) == 0;
	}
}

class StackToQueue
{
	private $stack1;
	private $stack2;

	public function __construct()
	{
		$this->stack1 = new Stack();
		$this->stack2 = new Stack();
	}

	public function enqueue($item)
	{
		$this->stack1->push($item);
	}

	public function dequeue()
	{
		while (!$this->stack1->isEmpty()) {
			$tmpItem = $this->stack1->pop();
			$this->stack2->push($tmpItem);
		}
		if (!$this->stack2->isEmpty()) {
			$popItem = $this->stack2->pop();
			echo "Dequeue Item::$popItem\n";
			return $popItem;
		}
		return;
	}
}

$staToQuObj = new StackToQueue();
$staToQuObj->enqueue("A");
$staToQuObj->enqueue("B");
$staToQuObj->enqueue("C");
$staToQuObj->enqueue("D");
$staToQuObj->enqueue("E");

$staToQuObj->dequeue();
$staToQuObj->dequeue();
$staToQuObj->dequeue();
$staToQuObj->dequeue();