<?php

use PiePHP\Core\Router;

Router::connect('/', 'WelcomeController@index')->name('welcome');
