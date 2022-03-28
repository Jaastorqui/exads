<?php

namespace App\Application;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

class HomeAction extends Action
{

    public function action(): ResponseInterface
    {
        return $this->twig->render($this->response, 'index.twig');
    }

}