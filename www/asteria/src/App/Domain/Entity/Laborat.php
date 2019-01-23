<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laborat
 *
 * @ORM\Table(name="laborat")
 * @ORM\Entity
 */
class Laborat
{
    /**
     * @var string
     *
     * @ORM\Column(name="cart", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cart = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clinea", type="string", length=3, nullable=true)
     */
    private $clinea;

    /**
     * @var string
     *
     * @ORM\Column(name="csublin", type="string", length=3, nullable=true)
     */
    private $csublin;

    /**
     * @var string
     *
     * @ORM\Column(name="xart", type="string", length=80, nullable=true)
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
     * @var float
     *
     * @ORM\Column(name="incentivo", type="float", precision=10, scale=2, nullable=true)
     */
    private $incentivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="insumo", type="boolean", nullable=true)
     */
    private $insumo;

    /**
     * @var string
     *
     * @ORM\Column(name="abrevia", type="string", length=25, nullable=true)
     */
    private $abrevia;

    /**
     * @var string
     *
     * @ORM\Column(name="cprov", type="string", length=4, nullable=true)
     */
    private $cprov = '0';



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
     * Set clinea
     *
     * @param string $clinea
     *
     * @return Laborat
     */
    public function setClinea($clinea)
    {
        $this->clinea = $clinea;

        return $this;
    }

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
     * @return Laborat
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
     * Set xart
     *
     * @param string $xart
     *
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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
     * @return Laborat
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

    /**
     * Set incentivo
     *
     * @param float $incentivo
     *
     * @return Laborat
     */
    public function setIncentivo($incentivo)
    {
        $this->incentivo = $incentivo;

        return $this;
    }

    /**
     * Get incentivo
     *
     * @return float
     */
    public function getIncentivo()
    {
        return $this->incentivo;
    }

    /**
     * Set insumo
     *
     * @param boolean $insumo
     *
     * @return Laborat
     */
    public function setInsumo($insumo)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return boolean
     */
    public function getInsumo()
    {
        return $this->insumo;
    }

    /**
     * Set abrevia
     *
     * @param string $abrevia
     *
     * @return Laborat
     */
    public function setAbrevia($abrevia)
    {
        $this->abrevia = $abrevia;

        return $this;
    }

    /**
     * Get abrevia
     *
     * @return string
     */
    public function getAbrevia()
    {
        return $this->abrevia;
    }

    /**
     * Set cprov
     *
     * @param string $cprov
     *
     * @return Laborat
     */
    public function setCprov($cprov)
    {
        $this->cprov = $cprov;

        return $this;
    }

    /**
     * Get cprov
     *
     * @return string
     */
    public function getCprov()
    {
        return $this->cprov;
    }
}
