# php-whmcs-api

Based in https://github.com/gbretas/laravel-whmcs

## Installation

### Composer

```bash
$ composer require "gbretas/php-whmcs-api" "guzzlehttp/guzzle:^7.4" "http-interop/http-factory-guzzle:^1.2"
```


### System Requirements

This package requires:
- **PHP ^7.4 | ^8.0**
- PHP extensions `curl`, `json` and `mbstring` 

## Usage

### Initialize Client 

Basic initialisation of the Client.

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new \gbretas\WhmcsApi\Client();
// Auth Credentials with identifier and secret
$client->authenticate('your_identifier', 'your_secret', \gbretas\WhmcsApi\Client::AUTH_API_CREDENTIALS);
// Login Credentials with Username and Password (without md5)
$client->authenticate('your_username', 'your_password', \gbretas\WhmcsApi\Client::AUTH_LOGIN_CREDENTIALS);
// Set the URL to your whmcs instance
$client->url('http://<your_whmcs_instance_url>');
```
### API access key

In case your instance has an additional `$api_access_key` configured in your whmcs `configuration.php`,
you can also add it by using `accessKey` in the init process.

```php
$client->accessKey('my_access_key');
```

## Examples

### Get clients

```php
$client->client()->getClients(['search' => 'firstname']);
```

### Get all orders

```php
$client->orders()->getOrders();
```

## License

The original package is released under the MIT License. See the bundled
[LICENSE](https://github.com/darthsoup/php-whmcs-api/blob/master/LICENSE.md) file for details.