<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipca
 *
 * @ORM\Table(name="tipca", indexes={@ORM\Index(name="fecha", columns={"fecha"})})
 * @ORM\Entity
 */
class Tipca
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var float
     *
     * @ORM\Column(name="compra", type="float", precision=10, scale=3, nullable=false)
     */
    private $compra = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="venta", type="float", precision=10, scale=3, nullable=true)
     */
    private $venta;

    /**
     * @var string
     *
     * @ORM\Column(name="creareg", type="string", length=30, nullable=true)
     */
    private $creareg;

    /**
     * @var string
     *
     * @ORM\Column(name="modireg", type="string", length=30, nullable=true)
     */
    private $modireg;

    /**
     * @var string
     *
     * @ORM\Column(name="borrreg", type="string", length=30, nullable=true)
     */
    private $borrreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Tipca
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set compra
     *
     * @param float $compra
     *
     * @return Tipca
     */
    public function setCompra($compra)
    {
        $this->compra = $compra;

        return $this;
    }

    /**
     * Get compra
     *
     * @return float
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set venta
     *
     * @param float $venta
     *
     * @return Tipca
     */
    public function setVenta($venta)
    {
        $this->venta = $venta;

        return $this;
    }

    /**
     * Get venta
     *
     * @return float
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Tipca
     */
    public function setCreareg($creareg)
    {
        $this->creareg = $creareg;

        return $this;
    }

    /**
     * Get creareg
     *
     * @return string
     */
    public function getCreareg()
    {
        return $this->creareg;
    }

    /**
     * Set modireg
     *
     * @param string $modireg
     *
     * @return Tipca
     */
    public function setModireg($modireg)
    {
        $this->modireg = $modireg;

        return $this;
    }

    /**
     * Get modireg
     *
     * @return string
     */
    public function getModireg()
    {
        return $this->modireg;
    }

    /**
     * Set borrreg
     *
     * @param string $borrreg
     *
     * @return Tipca
     */
    public function setBorrreg($borrreg)
    {
        $this->borrreg = $borrreg;

        return $this;
    }

    /**
     * Get borrreg
     *
     * @return string
     */
    public function getBorrreg()
    {
        return $this->borrreg;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Tipca
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
