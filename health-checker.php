<?php
/* Get the HTML or whatever is linked in $url. */
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/index.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
$response = curl_exec($ch);

/* Check for 404 (file not found). */
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if($httpCode == 302 || $httpCode == 200 || $httpCode == 301) {
  header($_SERVER['SERVER_PROTOCOL'] . 'OK', true, 200);
}
else
{
  header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
}

curl_close($handle);
?>
