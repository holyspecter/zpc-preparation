<?php

$string = <<<XML
<list>
  <node>
    <title>Title1</title>
    <value>Value1</value>
  </node>
  <node>
    <title>Title2</title>
    <value>Value2</value>
  </node>
</list>
XML;

$xml = new SimpleXMLElement($string);

$results = $xml->xpath('/list/node/title');
foreach ($results as $key => $title) {
  echo $title . "\n";
}
