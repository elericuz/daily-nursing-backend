<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablas
 *
 * @ORM\Table(name="tablas")
 * @ORM\Entity
 */
class Tablas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nombre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombretabla", type="string", length=99, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nombretabla;

    /**
     * @var string
     *
     * @ORM\Column(name="codtabla", type="string", length=30, nullable=true)
     */
    private $codtabla;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var float
     *
     * @ORM\Column(name="valor2", type="float", precision=10, scale=2, nullable=true)
     */
    private $valor2;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=100, nullable=true)
     */
    private $observa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tablas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nombretabla
     *
     * @param string $nombretabla
     *
     * @return Tablas
     */
    public function setNombretabla($nombretabla)
    {
        $this->nombretabla = $nombretabla;

        return $this;
    }

    /**
     * Get nombretabla
     *
     * @return string
     */
    public function getNombretabla()
    {
        return $this->nombretabla;
    }

    /**
     * Set codtabla
     *
     * @param string $codtabla
     *
     * @return Tablas
     */
    public function setCodtabla($codtabla)
    {
        $this->codtabla = $codtabla;

        return $this;
    }

    /**
     * Get codtabla
     *
     * @return string
     */
    public function getCodtabla()
    {
        return $this->codtabla;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return Tablas
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set valor2
     *
     * @param float $valor2
     *
     * @return Tablas
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return float
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Tablas
     */
    public function setObserva($observa)
    {
        $this->observa = $observa;

        return $this;
    }

    /**
     * Get observa
     *
     * @return string
     */
    public function getObserva()
    {
        return $this->observa;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Tablas
     */
    public function setActualiza($actualiza)
    {
        $this->actualiza = $actualiza;

        return $this;
    }

    /**
     * Get actualiza
     *
     * @return \DateTime
     */
    public function getActualiza()
    {
        return $this->actualiza;
    }
}
