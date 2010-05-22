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
	public current()
	{
		return $this->elements[$this->pointer];
	}
	public key()
	{
		return $this->pointer;
	}
	public next()
	{
		$this->pointer++;
	}
	public rewind()
	{
		$this->pointer = 0;
	}
	public valid()
	{
		return isset($this->elements[$this->pointer]);
	}
	
	public function add(element $element)
	{
		$this->elements[$element->getOrder()] = $element;
	}
}
?>