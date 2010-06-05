<?php
require_once 'view.interface.php';

class defaultview implements view
{
	const htmlHeader = 
'<!DOCTYPE html>
<html>
<head>
<title>Dimitiliia test</title>
</head>
<body>
';
	const htmlFooter = "</body>\n</html>";
	public function displayPage(page $page)
	{
		echo self::htmlHeader;
		foreach($page as $element)
			$this->displayElement($element);
		echo self::htmlFooter;
	}
	public function displayElement(element $element)
	{
		switch($element->type())
		{
			case 'headlineElement':
				$this->displayHeadline($element);
				break;
			case 'textElement':
				$this->displayText($element);
				break;
			case 'imageElement':
				$this->displayImage($element);
				break;
			default:
				$errormsg = 'Unknown element type: '.htmlentities($element->type());
				trigger_error($errormsg,E_USER_WARNING);
		}
	}
	public function displayHeadline(headlineElement $element)
	{
		echo '<h1>headline</h1>';
	}
	public function displayText(textElement $element)
	{
		echo '<p>text</p>';
	}
	public function displayImage(imageElement $element)
	{
		echo '<img alt="no pic" src="no.pic">';
	}
}
