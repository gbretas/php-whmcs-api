<?php

declare(strict_types=1);

namespace gbretas\WhmcsApi;

use gbretas\WhmcsApi\Api\Addons;
use gbretas\WhmcsApi\Api\Affiliates;
use gbretas\WhmcsApi\Api\Authentication;
use gbretas\WhmcsApi\Api\Billing;
use gbretas\WhmcsApi\Api\Client;
use gbretas\WhmcsApi\Api\Custom;
use gbretas\WhmcsApi\Api\Domains;
use gbretas\WhmcsApi\Api\Orders;
use gbretas\WhmcsApi\Api\Products;
use gbretas\WhmcsApi\Api\Servers;
use gbretas\WhmcsApi\Api\Service;
use gbretas\WhmcsApi\Api\System;
use gbretas\WhmcsApi\Api\Users;

trait ApiClassTrait
{
    public function addons(): Addons
    {
        return new Addons($this);
    }

    public function affiliates(): Affiliates
    {
        return new Affiliates($this);
    }

    public function authentication(): Authentication
    {
        return new Authentication($this);
    }

    public function billing(): Billing
    {
        return new Billing($this);
    }

    public function client(): Client
    {
        return new Client($this);
    }

    public function domains(): Domains
    {
        return new Domains($this);
    }

    public function orders(): Orders
    {
        return new Orders($this);
    }

    public function products(): Products
    {
        return new Products($this);
    }

    public function servers(): Servers
    {
        return new Servers($this);
    }

    public function service(): Service
    {
        return new Service($this);
    }

    public function system(): System
    {
        return new System($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }

    public function custom(): Custom
    {
        return new Custom($this);
    }
}
