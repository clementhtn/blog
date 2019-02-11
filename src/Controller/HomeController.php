<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symphony\Component\Routing\Annotation\Route;

class HomeController
{
    /*
     * @Route("/")
     */
    public function homepage ()
    {
        return new Response( "OMG this is my first page! :D" );
    }
}
