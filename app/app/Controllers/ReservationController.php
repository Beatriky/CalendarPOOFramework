<?php

namespace App\app\Controllers;

use App\Views\View;
use Doctrine\ORM\EntityManager;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ReservationController
{
    public function __construct(protected View $view,protected EntityManager $db)
    {

    }

    public function index(ServerRequestInterface $request): ResponseInterface
    {
        return $this->view->render(new Response, 'home.twig');
    }

}