<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 *
 * @ORM\Table(name="articulo", indexes={@ORM\Index(name="cart", columns={"cart"})})
 * @ORM\Entity
 */
class Articulo
{
    /**
     * @var string
     *
     * @ORM\Column(name="clinea", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clinea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="csublin", type="string", length=3, nullable=true)
     */
    private $csublin;

    /**
     * @var string
     *
     * @ORM\Column(name="cart", type="string", length=10, nullable=true)
     */
    private $cart;

    /**
     * @var string
     *
     * @ORM\Column(name="xart", type="string", length=40, nullable=true)
     */
    private $xart;

    /**
     * @var string
     *
     * @ORM\Column(name="unicom", type="string", length=2, nullable=true)
     */
    private $unicom;

    /**
     * @var string
     *
     * @ORM\Column(name="univen", type="string", length=2, nullable=true)
     */
    private $univen;

    /**
     * @var float
     *
     * @ORM\Column(name="faccon", type="float", precision=10, scale=2, nullable=true)
     */
    private $faccon = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="precom", type="float", precision=10, scale=2, nullable=true)
     */
    private $precom = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="preven", type="float", precision=10, scale=2, nullable=true)
     */
    private $preven = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="putil", type="float", precision=10, scale=2, nullable=true)
     */
    private $putil;

    /**
     * @var float
     *
     * @ORM\Column(name="pultcom", type="float", precision=10, scale=2, nullable=true)
     */
    private $pultcom;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="venta", type="boolean", nullable=true)
     */
    private $venta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



    /**
     * Get clinea
     *
     * @return string
     */
    public function getClinea()
    {
        return $this->clinea;
    }

    /**
     * Set csublin
     *
     * @param string $csublin
     *
     * @return Articulo
     */
    public function setCsublin($csublin)
    {
        $this->csublin = $csublin;

        return $this;
    }

    /**
     * Get csublin
     *
     * @return string
     */
    public function getCsublin()
    {
        return $this->csublin;
    }

    /**
     * Set cart
     *
     * @param string $cart
     *
     * @return Articulo
     */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return string
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set xart
     *
     * @param string $xart
     *
     * @return Articulo
     */
    public function setXart($xart)
    {
        $this->xart = $xart;

        return $this;
    }

    /**
     * Get xart
     *
     * @return string
     */
    public function getXart()
    {
        return $this->xart;
    }

    /**
     * Set unicom
     *
     * @param string $unicom
     *
     * @return Articulo
     */
    public function setUnicom($unicom)
    {
        $this->unicom = $unicom;

        return $this;
    }

    /**
     * Get unicom
     *
     * @return string
     */
    public function getUnicom()
    {
        return $this->unicom;
    }

    /**
     * Set univen
     *
     * @param string $univen
     *
     * @return Articulo
     */
    public function setUniven($univen)
    {
        $this->univen = $univen;

        return $this;
    }

    /**
     * Get univen
     *
     * @return string
     */
    public function getUniven()
    {
        return $this->univen;
    }

    /**
     * Set faccon
     *
     * @param float $faccon
     *
     * @return Articulo
     */
    public function setFaccon($faccon)
    {
        $this->faccon = $faccon;

        return $this;
    }

    /**
     * Get faccon
     *
     * @return float
     */
    public function getFaccon()
    {
        return $this->faccon;
    }

    /**
     * Set precom
     *
     * @param float $precom
     *
     * @return Articulo
     */
    public function setPrecom($precom)
    {
        $this->precom = $precom;

        return $this;
    }

    /**
     * Get precom
     *
     * @return float
     */
    public function getPrecom()
    {
        return $this->precom;
    }

    /**
     * Set preven
     *
     * @param float $preven
     *
     * @return Articulo
     */
    public function setPreven($preven)
    {
        $this->preven = $preven;

        return $this;
    }

    /**
     * Get preven
     *
     * @return float
     */
    public function getPreven()
    {
        return $this->preven;
    }

    /**
     * Set putil
     *
     * @param float $putil
     *
     * @return Articulo
     */
    public function setPutil($putil)
    {
        $this->putil = $putil;

        return $this;
    }

    /**
     * Get putil
     *
     * @return float
     */
    public function getPutil()
    {
        return $this->putil;
    }

    /**
     * Set pultcom
     *
     * @param float $pultcom
     *
     * @return Articulo
     */
    public function setPultcom($pultcom)
    {
        $this->pultcom = $pultcom;

        return $this;
    }

    /**
     * Get pultcom
     *
     * @return float
     */
    public function getPultcom()
    {
        return $this->pultcom;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Articulo
     */
    public function setCmoneda($cmoneda)
    {
        $this->cmoneda = $cmoneda;

        return $this;
    }

    /**
     * Get cmoneda
     *
     * @return string
     */
    public function getCmoneda()
    {
        return $this->cmoneda;
    }

    /**
     * Set venta
     *
     * @param boolean $venta
     *
     * @return Articulo
     */
    public function setVenta($venta)
    {
        $this->venta = $venta;

        return $this;
    }

    /**
     * Get venta
     *
     * @return boolean
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Articulo
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
