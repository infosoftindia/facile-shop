<?php

namespace App\Http;

use Facile\Http\HttpKernel;
use Facile\Http\Middlewares\Api;
use Facile\Http\Middlewares\CheckForMaintenance;
use Facile\Http\Middlewares\PresentSecretKey;

class Kernel extends HttpKernel
{
    /**
     * Stores global middlewares.
     *
     * @var array
     */
    protected $globalMiddlewares
        = [
            CheckForMaintenance::class,
            PresentSecretKey::class
        ];

    /**
     * Stores route middlewares.
     *
     * @var array
     */
    protected $routeMiddlewares
        = [
            'api' => Api::class
        ];
}