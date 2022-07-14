<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {   
        $greet = '';
        if ($name = $request->query->get('hello')){
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }


        return new Response("
        <html>
            <link rel='shortcut icon' href='data:image/x-icon;,' type='image/x-icon'>
            <body>
                $greet
                <img src='/images/oc.png' />
            </body>
        </html>
        "
        );
    }
}
