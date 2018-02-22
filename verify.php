<?php
$access_token = 'vdh387ruOVX898izOaOqIWbdpkf+9s7JgzHYBqGJIBPUcfHhoup8SUzgMNYglhuZSAjIl3CiO6P5UVPhgnWQo4PxLB9bYvuT0NgpOn56VcKnITaH0gn6qbgzXtAZEFCFauWr60vojFABfLcPR7rpGwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;