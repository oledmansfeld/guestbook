<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response("
        <html>
            <link rel='shortcut icon' href='data:image/x-icon;,' type='image/x-icon'>
            <body>
                <img src='/images/oc.png' />
            </body>
        </html>
        "
        );
    }
}
