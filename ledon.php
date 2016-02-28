<?php
function sendCommand($item, $data) {

$url = "http://localhost:8880/rest/items/" . $item;
$options = array( 'http' => array(
                  'header'  => "Content-type: text/plain\r\n",
                  'method'  => 'POST',
                  'content' => $data));
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
return $result;
}
sendCommand($_GET['item'],$_GET['value']);


?>