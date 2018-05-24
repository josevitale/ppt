<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PartidoUsuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Partido")
     */
    private $partido;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\Column(type="smallint")
     */
    private $golesLocal;

    /**
     * @ORM\Column(type="smallint")
     */
    private $golesVisitante;

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
     * @return Partido
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * @param Partido $partido
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;
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