<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ApuestaUsuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Apuesta")
     */
    private $apuesta;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoGanador;

    /**
     * @ORM\Column(type="boolean")
     */
    private $resultado;

    /**
     * @ORM\Column(type="smallint")
     */
    private $puntosObtenidos;

    /**
     * @return integer
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
     * @return boolean
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param boolean $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    /**
     * @return integer
     */
    public function getPuntosObtenidos()
    {
        return $this->puntosObtenidos;
    }

    /**
     * @param integer $puntosObtenidos
     */
    public function setPuntosObtenidos($puntosObtenidos)
    {
        $this->puntosObtenidos = $puntosObtenidos;
    }
}