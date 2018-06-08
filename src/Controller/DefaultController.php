<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        $partidos = $this->getDoctrine()->getRepository('App:Partido')->findAllPartidosOrdenadosPorFecha();

        return $this->render('default/index.html.twig', [
            'partidos' => $partidos,
        ]);
    }
}
