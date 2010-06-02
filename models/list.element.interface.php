<?php
interface listElement extends element, ArrayAccess, Iterator
{
	abstract public function add(element $element);
}
?>