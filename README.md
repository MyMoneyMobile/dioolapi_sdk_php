Diool API PHP
=============

PHP API call
The documentation is available at http://api.diool.com/

Just install the package, add the config and it is ready to use!

[![Build Status](https://travis-ci.org/fabricelepro/diool-php.svg?branch=master)](https://travis-ci.org/fabricelepro/diool-php)
[![Coverage Status](https://coveralls.io/repos/github/fabricelepro/diool-php/badge.svg?branch=master)](https://coveralls.io/github/fabricelepro/diool-php?branch=master)
[![Latest Stable Version](https://poser.pugx.org/fabricelepro/diool-php/v/stable)](https://packagist.org/packages/fabricelepro/diool-php)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](http://opensource.org/licenses/MIT)

Requirements
============

* PHP >= 7.1

Installation
============

    composer require fabricelepro/diool-php

Usage
=====

You just have to instanciate the Request Object
```php
 <?php

    use Diool\Features\Request;

    require 'vendor/autoload.php';
    $api = new Request(YOUR_KEY)
```

### Get Balance
```php
 $api->getBalance();
```

It return an Balance Object

### Get Send Airtime
```php
 $api->airtime(NUMBER,AMOUNT);
```

It return an Airtime Object

### Get Send Payment Request

```php
 $api->sendPayment(NUMBER,AMOUNT);
```

It return an Payment Object
