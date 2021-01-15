<?php

$router->post('login', 'Auth\LoginController@login');
$router->post('register', 'Auth\RegisterController@register');
