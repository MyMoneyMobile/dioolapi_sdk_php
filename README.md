Diool API PHP
=============

PHP API call
The documentation is available at http://api.diool.com/

Just install the package, add the config and it is ready to use!

[![Build Status](https://travis-ci.org/fabricelepro/diool-php.svg?branch=master)](https://travis-ci.org/fabricelepro/diool-php)


Requirements
============

* PHP >= 5.3.7
* cURL Extension

Installation
============

    composer require fabricelepro/diool-php

Usage
=====

You just have to instanciate the Request Object

    ?php

    use Diool\Features\Request;

    require 'vendor/autoload.php';
    $api = new Request(YOUR_KEY)

### Get Balance

    $api->getBalance();

It return an Balance Object

### Get Send Airtime

    $api->airtime(NUMBER,AMOUNT);

It return an Airtime Object

### Get Send Payment Request

    $api->sendPayment(NUMBER,AMOUNT);

It return an Payment Object
