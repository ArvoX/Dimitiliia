<?php
abstract class element implements element
{
	private $order;
	
	public function getOrder()
	{
		return $this->order;
	}
}
?>