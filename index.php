<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 21/02/2018
 * Time: 13:11
 */

use Diool\Features\Request;

require 'vendor/autoload.php';

$api = new Request('KEY');
$response = $api->getBalance();
var_dump($response);
