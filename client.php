<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/satub_4754/server.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$code =  isset($_GET["code"]) ? $_GET["code"] : '' ;

$result = $client->call('get_food_by_code', array('code'=>$code));
$data = json_decode($result);
// echo '<pre>';
// print_r($data);
// echo '</pre>';
?>