<?php
Function createDom($encoding, $rootname) {
	if($encoding==null) {
		$dom = new domDocument("1.0", "utf-8");
	}
	else {
		$dom = new domDocument("1.0", $encoding);
	}
	return $dom;
}
Function saveDom($dom, $filename) {
	if($dom->save($filename)) {
		return true;
	}
	else {
		return false;
	}
}
Function createElement($dom, $name, $content) {
	if($content==null) {
		$element = $dom->createElement($name);
		$dom->appendChild($element);
		return $element;
	}
	else {
		$element = $dom->createElement($name);
		$element->appendChild($dom->createTextNode($content));
		$dom->appendChild($element);
		return $element; 
	}
}
?>