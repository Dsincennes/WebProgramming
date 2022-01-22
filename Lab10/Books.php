<?php

$q = $_GET["q"];

$y = "";

$xml = file_get_contents("Books.xml");

$xmlDoc = new DOMDocument();
$xmlDoc->loadXML($xml);

$book = $xmlDoc->getElementsByTagName("book");

foreach ($book as $currentBook) {
	foreach ($currentBook->childNodes as $node) {
		if ($node->nodeName == "genre") {
			if ($node->nodeValue == $q) {
				$y = ($node->parentNode);

				foreach ($y->childNodes as $node) {

					if ($node->nodeName == "author") {
						echo ("<b>" . $node->nodeName . ":</b> ");
						echo ($node->nodeValue);
						echo ("<br>");
					}

					if ($node->nodeName == "title") {
						echo ("<b>" . $node->nodeName . ":</b> ");
						echo ($node->nodeValue);
						echo ("<br>");
					}

					if ($node->nodeName == "genre") {
						echo ("<b>" . $node->nodeName . ":</b> ");
						echo ($node->nodeValue);
						echo ("<br>");
					}

					if ($node->nodeName == "price") {
						echo ("<b>" . $node->nodeName . ":</b> ");
						echo ($node->nodeValue);
						echo ("<br>");
					}

					if ($node->nodeName == "publish_date") {
						echo ("<b>" . $node->nodeName . ":</b> ");
						echo ($node->nodeValue);
						echo ("<br>");
					}

					if ($node->nodeName == "description") {
						echo ("<b>" . $node->nodeName . ":</b> ");
						echo ($node->nodeValue);
						echo ("<br>");
					}
				}
				echo ("<br>");
			}
		}
	}
}
