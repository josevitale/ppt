<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartidoRepository")
 */
class Partido
{
    const RESULTADO_LOCAL = 1;
    const RESULTADO_EMPATE = 2;
    const RESULTADO_VISITANTE = 3;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

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
    private $equipoLocal;

    /**
     * @var Equipo
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoVisitante;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $golesLocal;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint",nullable=true)
     */
    private $golesVisitante;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint",nullable=true)
     */
    private $resultado;

    /**
     * @var Agrupamiento
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Agrupamiento")
     */
    private $agrupamiento;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
    public function getEquipoLocal()
    {
        return $this->equipoLocal;
    }

    /**
     * @param Equipo $equipoLocal
     */
    public function setEquipoLocal($equipoLocal)
    {
        $this->equipoLocal = $equipoLocal;
    }

    /**
     * @return Equipo
     */
    public function getEquipoVisitante()
    {
        return $this->equipoVisitante;
    }

    /**
     * @param Equipo $equipoVisitante
     */
    public function setEquipoVisitante($equipoVisitante)
    {
        $this->equipoVisitante = $equipoVisitante;
    }

    /**
     * @return int
     */
    public function getGolesLocal()
    {
        return $this->golesLocal;
    }

    /**
     * @param int $golesLocal
     */
    public function setGolesLocal($golesLocal)
    {
        $this->golesLocal = $golesLocal;
    }

    /**
     * @return int
     */
    public function getGolesVisitante()
    {
        return $this->golesVisitante;
    }

    /**
     * @param int $golesVisitante
     */
    public function setGolesVisitante($golesVisitante)
    {
        $this->golesVisitante = $golesVisitante;
    }

    /**
     * @return int
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param int $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
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
