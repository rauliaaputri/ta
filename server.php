<?php
error_reporting(E_ALL);
ini_set('display_error',1);

require_once 'nusoap/lib/nusoap.php';
require_once 'adodb/adodb.inc.php';
require_once 'foodie.php';
$server = new nusoap_server();
$server->configureWSDL('Service Food','urn:food');
$server->wsdl->schemaTargetNamespace = 'urn:food';

$server->register('get_food_by_code',
  array(
    'code' => 'xsd:string'),
    array(
      'return' => 'xsd:string'
    ),
    'urn:food',
    'urn:food#get_food_by_code',
    'rpc',
    'encoded',
    'get_food_by_code'
  );

function get_food_by_code($code="") {
  $food = new Food();
  return $food->get_food_by_code($code);
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>