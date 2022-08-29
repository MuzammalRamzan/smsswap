<?php 

define('BASEURL', 'http://localhost/periodicsoft/smswap-finance/');

$URL = array_filter(explode('/', $_SERVER['SCRIPT_NAME']));
$page = $URL[count($URL)];
$page = explode('.',$page)[0];
define('PAGE', $page);