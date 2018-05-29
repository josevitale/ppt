<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class CampeonatoUsuario
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Campeonato
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Campeonato")
     */
    private $campeonato;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $puntosObtenidos;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Campeonato
     */
    public function getCampeonato()
    {
        return $this->campeonato;
    }

    /**
     * @param Campeonato $campeonato
     */
    public function setCampeonato($campeonato)
    {
        $this->campeonato = $campeonato;
    }

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return int
     */
    public function getPuntosObtenidos()
    {
        return $this->puntosObtenidos;
    }

    /**
     * @param int $puntosObtenidos
     */
    public function setPuntosObtenidos($puntosObtenidos)
    {
        $this->puntosObtenidos = $puntosObtenidos;
    }
}