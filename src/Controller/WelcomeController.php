<?php

namespace Controller;

use PiePHP\Core\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $this->render('welcome');
    }
}
