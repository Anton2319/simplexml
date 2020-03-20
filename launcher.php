<?php
include 'xmlcreator.php';
$dom = createDom(null, "root");
createElement($dom, "root", "This is a test");
saveDom($dom, "testfile.xml");
?>