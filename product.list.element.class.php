<?php
class productListElement implements listElement
{
	private $elements = array();
	private $pointer = 0;
	
	public boolean offsetExists( mixed $offset )
	public mixed offsetGet( mixed $offset )
	public void offsetSet( mixed $offset , mixed $value )
	public void offsetUnset( mixed $offset )
	
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