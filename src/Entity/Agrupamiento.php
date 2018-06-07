<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Agrupamiento
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
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $etapa;

    /**
     * @var Campeonato
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Campeonato")
     */
    private $campeonato;

    /**
     * @var int
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var string
     *
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
     * @return int
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * @param int $etapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
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

    public function __toString()
    {
        return $this->getNombre();
    }
}
