<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportes
 *
 * @ORM\Table(name="reportes", indexes={@ORM\Index(name="creporte", columns={"creporte"})})
 * @ORM\Entity
 */
class Reportes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tabla", type="string", length=10, nullable=true)
     */
    private $tabla;

    /**
     * @var string
     *
     * @ORM\Column(name="creporte", type="string", length=20, nullable=true)
     */
    private $creporte;

    /**
     * @var string
     *
     * @ORM\Column(name="xreporte", type="string", length=10, nullable=true)
     */
    private $xreporte;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=50, nullable=true)
     */
    private $observa;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tabla
     *
     * @param string $tabla
     *
     * @return Reportes
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get tabla
     *
     * @return string
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set creporte
     *
     * @param string $creporte
     *
     * @return Reportes
     */
    public function setCreporte($creporte)
    {
        $this->creporte = $creporte;

        return $this;
    }

    /**
     * Get creporte
     *
     * @return string
     */
    public function getCreporte()
    {
        return $this->creporte;
    }

    /**
     * Set xreporte
     *
     * @param string $xreporte
     *
     * @return Reportes
     */
    public function setXreporte($xreporte)
    {
        $this->xreporte = $xreporte;

        return $this;
    }

    /**
     * Get xreporte
     *
     * @return string
     */
    public function getXreporte()
    {
        return $this->xreporte;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Reportes
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
}
