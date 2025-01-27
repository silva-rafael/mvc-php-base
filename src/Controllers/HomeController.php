<?php

namespace App\Controllers;

use Slim\Views\Twig;

class HomeController
{
    public function home($request, $response, $args)
    {
        $view = Twig::fromRequest($request);

        return $view->render($response, 'site/home.html', [
            'name' => 'John',
        ]);
    }
}
