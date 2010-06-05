<?php
class page implements Iterator
{
	private $name;
	private $elements = array();
	private $pointer = 0;
	
	private function __construct()
	{
	
	}
	
	public static function byName($name)
	{
		return new self();
	}
	
	//Iterator
	public function current()
	{
		return $this->elements[$this->pointer];
	}
	public function key()
	{
		return $this->pointer;
	}
	public function next()
	{
		$this->pointer++;
	}
	public function rewind()
	{
		$this->pointer = 0;
	}
	public function valid()
	{
		return isset($this->elements[$this->pointer]);
	}
	
	public function add(element $element)
	{
		$this->elements[] = $element;
	}
}
?>
