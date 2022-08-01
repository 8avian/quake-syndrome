<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServersController extends AbstractController
{
    #[Route('/servers', name: 'app_servers')]
    public function index(): Response
    {
        $request = Request::createFromGlobals();
        $servers = [
            [
                'name' => 'OSP Tourney DM',
                'ip' => '86.121.232.214',
                'ip2' => $request->getClientIp()
            ]
        ];
        return $this->render('servers/index.html.twig', [
            'servers' => $servers,
        ]);
    }
}
