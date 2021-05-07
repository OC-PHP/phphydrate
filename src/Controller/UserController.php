<?php

namespace App\Controller;

use App\Entity\User;
use Core\Controller;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class UserController extends Controller
{
    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function index()
    {
        // Create empty entity
        $user = new User();

        // If the user have submitted form
        if(isset($_POST)) {
            // Create entity with data from form (this is hydrate)
            $user = new User($_POST);
        }
        // Display simple form
        echo $this->twig->render('/user/index.php.twig', ['user' => $user]);
    }
}