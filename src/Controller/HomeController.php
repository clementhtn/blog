<?php

namespace App\Controller;

use Symphony\Component\HttpFoundation\Response;

class HomeController
{
    public function homepage()
    {
        return new Response('OMG! My first Symphony page! :D');
    }
}
?>