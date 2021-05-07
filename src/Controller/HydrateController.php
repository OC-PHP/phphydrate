<?php

namespace App\Controller;

use Core\Controller;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HydrateController extends Controller
{
    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function index()
    {
        echo $this->twig->render('/hydrate/index.php.twig', []);
    }
}