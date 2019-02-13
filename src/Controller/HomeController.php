<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{
    /**
     * @Route("/hello/{name}/age/{age}", name= "hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{name}", name="hello_prenom")
     * leads to the hello page
     *
     * @return void
     */
    public function hello($name = 'anonymous', $age = 18){
        return $this->render(
            'hello.html.twig',
            [
                'name'  => $name,
                'age'   => $age,
                'brand' => "Rent a movie tool",
                'title' => "Hello"
            ]
        );
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        return $this->render(
            'home.html.twig',
            [
                'brand' => "Rent a movie tool",
                'age'   => 41,
                'title' => "Home"
            ]
        );
    }
}