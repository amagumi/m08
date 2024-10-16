<?php
$note = <<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml = new SimpleXMLElement($note); 
header("Content-type: text/xml"); //esta linea hace que en el navegador el contenido se imprima en xml
echo $xml->asXML();
