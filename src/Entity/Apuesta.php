<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Apuesta
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
     * @var string
     *
     * @ORM\Column(type="string", length=191)
     */
    private $nombre;

    /**
     * @var Equipo
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoGanador;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $puntosQueOtorga;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $resultado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $fechaHasta;

    /**
     * @var Agrupamiento
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Agrupamiento")
     */
    private $agrupamiento;

    /**
     * @var Partido
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Partido")
     */
    private $partido;

    /**
     * @return int
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
     * @return int
     */
    public function getPuntosQueOtorga()
    {
        return $this->puntosQueOtorga;
    }

    /**
     * @param int $puntosQueOtorga
     */
    public function setPuntosQueOtorga($puntosQueOtorga)
    {
        $this->puntosQueOtorga = $puntosQueOtorga;
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

    /**
     * @return Partido
     */
    public function getPartido(): Partido
    {
        return $this->partido;
    }

    /**
     * @param Partido $partido
     */
    public function setPartido(Partido $partido)
    {
        $this->partido = $partido;
    }
}