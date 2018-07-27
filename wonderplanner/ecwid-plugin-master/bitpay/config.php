<?php

// ecwid settings
$storeURL = 'http://localhost/wonderplanner/';  // example: 'http://www.example.com/ecwid/index.html'
$storeId = '13466355'; // found in your ecwid control panel, bottom-right

// bitpay settings
// url of bitpay folder on your server.  example: 'http://www.example.com/ecwid/bitpay/
$bitpayURL = 'http://localhost/wonderplanner/ecwid-plugin-master/bitpay'; 
// apiKey: create this at bitpay.com in your account settings and paste it here
$apiKey = 'j2ZmA8k8UMD8AL0wAl2yzmgSMdtlsbS45f7VL7Bg0';  // ex 'DNboT9fVNpW7usAuDNboT9fVNpW7usAu'
// speed: Warning: on medium/low, customers will not see an order confirmation page.  
$speed = 'high'; // can be 'high', 'medium' or 'low'.  See bitpay API doc for more details.

//payment method settings
$login = '2396232333'; // see README
$hashValue = '9423422497'; // see README

// add trailing slash to url
$bitpayURL = preg_replace('#([^\/])$#', '\1/', $bitpayURL);

?>