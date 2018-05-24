<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Apuesta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoGanador;

    /**
     * @ORM\Column(type="smallint")
     */
    private $puntosQueOtorga;

    /**
     * @ORM\Column(type="boolean")
     */
    private $resultado;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaHasta;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agrupamiento")
     */
    private $agrupamiento;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * @return mixed
     */
    public function getPuntosQueOtorga()
    {
        return $this->puntosQueOtorga;
    }

    /**
     * @param mixed $puntosQueOtorga
     */
    public function setPuntosQueOtorga($puntosQueOtorga)
    {
        $this->puntosQueOtorga = $puntosQueOtorga;
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
     * @return \DateTime
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * @param \DateTime $fechaHasta
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;
    }

    /**
     * @return Agrupamiento
     */
    public function getAgrupamiento()
    {
        return $this->agrupamiento;
    }

    /**
     * @param Agrupamiento $agrupamiento
     */
    public function setAgrupamiento($agrupamiento)
    {
        $this->agrupamiento = $agrupamiento;
    }
}