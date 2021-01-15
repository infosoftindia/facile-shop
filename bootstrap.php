<?php

use App\Bootstrap\App;
use Facile\Database\Connection;
use Facile\Database\Goku\Builder\QueryBuilder;
use Dotenv\Dotenv;

require 'vendor/autoload.php';
$router = new Facile\Routing\Router();
require 'routes/web.php';
require 'routes/api.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = require 'config/database.php';

App::bind('Database', new QueryBuilder((new Connection())->make($config['Database'])));