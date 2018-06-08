<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"partido", "usuario"},
 *     message="Solamente se puede pronosticar una vez en cada partido."
 * )
 */
class PartidoUsuario
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
     * @var Partido
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Partido")
     */
    private $partido;

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
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $golesLocal;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $golesVisitante;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $resultado;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint", nullable=true)
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