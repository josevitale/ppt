<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ApuestaUsuario
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
     * @var Apuesta
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Apuesta")
     */
    private $apuesta;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @var Equipo
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoGanador;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $resultado;

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
     * @return Apuesta
     */
    public function getApuesta()
    {
        return $this->apuesta;
    }

    /**
     * @param Apuesta $apuesta
     */
    public function setApuesta($apuesta)
    {
        $this->apuesta = $apuesta;
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
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param \DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return Equipo
     */
    public function getEquipoGanador()
    {
        return $this->equipoGanador;
    }

    /**
     * @param Equipo $equipoGanador
     */
    public function setEquipoGanador($equipoGanador)
    {
        $this->equipoGanador = $equipoGanador;
    }

    /**
     * @return bool
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param bool $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
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