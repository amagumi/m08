<?php
$xml=new SimpleXMLElement("note.xml", 0, TRUE);
echo $xml->asXML();
header("Content-type: text/xml");
?> 

