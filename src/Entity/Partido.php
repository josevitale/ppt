<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Partido
{
    const RESULTADO_LOCAL = 1;
    const RESULTADO_EMPATE = 2;
    const RESULTADO_VISITANTE = 3;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoLocal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipoVisitante;

    /**
     * @ORM\Column(type="smallint")
     */
    private $golesLocal;

    /**
     * @ORM\Column(type="smallint")
     */
    private $golesVisitante;

    /**
     * @ORM\Column(type="boolean")
     */
    private $penales;

    /**
     * @ORM\Column(type="smallint")
     */
    private $penalesLocal;

    /**
     * @ORM\Column(type="smallint")
     */
    private $penalesVisitante;

    /**
     * @ORM\Column(type="smallint")
     */
    private $resultado;

    /**
     * @ORM\Column(type="smallint")
     */
    private $resultadoPenales;

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
     * @return integer
     */
    public function getGolesLocal()
    {
        return $this->golesLocal;
    }

    /**
     * @param integer $golesLocal
     */
    public function setGolesLocal($golesLocal)
    {
        $this->golesLocal = $golesLocal;
    }

    /**
     * @return integer
     */
    public function getGolesVisitante()
    {
        return $this->golesVisitante;
    }

    /**
     * @param integer $golesVisitante
     */
    public function setGolesVisitante($golesVisitante)
    {
        $this->golesVisitante = $golesVisitante;
    }

    /**
     * @return boolean
     */
    public function getPenales()
    {
        return $this->penales;
    }

    /**
     * @param boolean $penales
     */
    public function setPenales($penales)
    {
        $this->penales = $penales;
    }

    /**
     * @return integer
     */
    public function getPenalesLocal()
    {
        return $this->penalesLocal;
    }

    /**
     * @param integer $penalesLocal
     */
    public function setPenalesLocal($penalesLocal)
    {
        $this->penalesLocal = $penalesLocal;
    }

    /**
     * @return integer
     */
    public function getPenalesVisitante()
    {
        return $this->penalesVisitante;
    }

    /**
     * @param integer $penalesVisitante
     */
    public function setPenalesVisitante($penalesVisitante)
    {
        $this->penalesVisitante = $penalesVisitante;
    }

    /**
     * @return integer
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param integer $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    /**
     * @return integer
     */
    public function getResultadoPenales()
    {
        return $this->resultadoPenales;
    }

    /**
     * @param integer $resultadoPenales
     */
    public function setResultadoPenales($resultadoPenales)
    {
        $this->resultadoPenales = $resultadoPenales;
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
