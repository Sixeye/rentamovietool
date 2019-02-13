<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController{
    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        return new Response("
<html>
    <head>
        <title>RENTAMOVIETOOL</title>
    </head>
    <body>
        <h1>Welcome to the movie tools rental website</h1>
        <p>Every tool will have an insurance policy during the rental duration.</p>
    </body>
</html>");
    }
}