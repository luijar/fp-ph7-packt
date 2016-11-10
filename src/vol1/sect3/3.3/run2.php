<?php
/**
 * Volume 1 - Recursion (2)
 * Author: @luijar
 * Run 2
 */
require_once 'rec_xml.php';

$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
 <movie>
  <title>PHP: Behind the Parser</title>
  <characters>
   <character>
    <name>Ms. Coder</name>
    <actor>Onlivia Actora</actor>
   </character>
   <character>
    <name>Mr. Coder</name>
    <actor>El Act&#211;r</actor>
   </character>
  </characters>
  <plot>
   	So, this language. It's like, a programming language. Or is it a
   	scripting language? All is revealed in this thrilling horror spoof
   	of a documentary.
  </plot>  
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </movie>
</movies>
XML;

$movies = new SimpleXMLElement($xmlstr);

walkXmlTree($movies, function ($node) {
	printf("Found element: %s"  . PHP_EOL,  $node->getName());
});

walkXmlTree($movies, function ($node) {
	if($node->getName() === 'actor') {
		printf("Found an actor!: %s"  . PHP_EOL,  $node->__toString());	
	}	
});









































