Diool API PHP
=============

PHP API call
The documentation is available at http://api.diool.com/

Just install the package, add the config and it is ready to use!

[![Codeship Status for dioollabs/dioolapi_sdk_php](https://app.codeship.com/projects/9c1ca240-fd5a-0135-9f36-161490fc371c/status?branch=master)](https://app.codeship.com/projects/279212)
[![Coverage Status](https://coveralls.io/repos/github/fabricelepro/diool-php/badge.svg?branch=master)](https://coveralls.io/github/fabricelepro/diool-php?branch=master)
[![Latest Stable Version](https://poser.pugx.org/dioollab/diool-php/v/stable)](https://packagist.org/packages/dioollab/diool-php)
[![License](https://poser.pugx.org/dioollab/diool-php/license)](https://packagist.org/packages/dioollab/diool-php)

Requirements
============

* PHP >= 7.1

Installation
============

    composer require dioollab/diool-php

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

### Send Airtime
```php
 $api->airtime(NUMBER,AMOUNT);
```

It return an Airtime Object

### Send Payment Request

```php
 $api->sendPayment(NUMBER,AMOUNT);
```

It return an Payment Object
