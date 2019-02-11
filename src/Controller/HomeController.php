<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/")
     */
    public function homepage ()
    {
        return new Response( "OMG this is my first page! :D" );
    }

    /**
     * @Route("/article/{page}")
     */
    public function read ()
    {
        return new Response( "L'article article" );
    }
}
