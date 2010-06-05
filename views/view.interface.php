<?php
require_once 'element.interface.php';
require_once 'headline.element.class.php';
require_once 'image.element.class.php';
require_once 'page.class.php';
require_once 'text.element.class.php';

interface view
{
	public function displayPage(page $page);
	public function displayElement(element $element);
	public function displayHeadline(headlineElement $element);
	public function displayText(textElement $element);
	public function displayImage(imageElement $element);
}
