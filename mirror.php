<?php
$url = 'http://h5.cyol.com/special/weixin/sign.json';
$host= 'h5.cyol.com';
$ch = curl_init();
$httpheader = array(
  'Host' => $host,
  'Connection' => 'keep-alive',
  'Pragma' => 'no-cache',
  'Cache-Control' => 'no-cache',
  'Accept' => 'textml,application/xhtml+xml,application/xml;q=0.9,image/webp,/;q=0.8',
  'User-Agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36',
  'Accept-Encoding' => 'gzip, deflate, sdch',
  'Accept-Language' => 'zh-CN,zh;q=0.8,en;q=0.6,zh-TW;q=0.4'
);
$options = array(
  CURLOPT_HTTPHEADER => $httpheader,
  CURLOPT_URL => $url,
  CURLOPT_TIMEOUT => 5,
  CURLOPT_FOLLOWLOCATION => 1,
  CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array( $ch , $options );
$result = curl_exec( $ch );
curl_close($ch);
header('Content-Type: application/json');
echo $result;