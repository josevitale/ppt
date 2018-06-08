<?php

namespace App\Controller;

use App\Entity\PartidoUsuario;
use App\Form\PartidoUsuarioType;
use App\Response\ResponseData;
use Symfony\Component\HttpFoundation\Request;

class PartidoUsuarioController extends BaseController
{
    public function new(Request $request, $partido_id, $usuario_id)
    {
        $partido = $this->getDoctrine()->getRepository('App:Partido')->find($partido_id);
        $usuario = $this->getDoctrine()->getRepository('App:Usuario')->find($usuario_id);
        $partidoUsuario = new PartidoUsuario();
        $partidoUsuario->setPartido($partido);
        $partidoUsuario->setUsuario($usuario);
        $form = $this->crearForm(PartidoUsuarioType::class, $partidoUsuario, array('method' => 'POST'), $request);
        $form = $this->procesarForm($form, $request);

        return $this->render('partido_usuario/new.html.twig', [
            'partidousuario' => $partidoUsuario,
            'form' => $form->createView(),
        ]);

        $response = new ResponseData();
        $response->setForm($form);

        return $response;
    }
}