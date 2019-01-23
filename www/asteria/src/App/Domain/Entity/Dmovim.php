<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dmovim
 *
 * @ORM\Table(name="dmovim", indexes={@ORM\Index(name="cdocum", columns={"cdocum", "ndocum", "serie", "xart"})})
 * @ORM\Entity
 */
class Dmovim
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
     * @ORM\Column(name="cdocum", type="string", length=2, nullable=false)
     */
    private $cdocum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ndocum", type="string", length=10, nullable=false)
     */
    private $ndocum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=false)
     */
    private $csede = '';

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=3, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=1, nullable=true)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="xart", type="string", length=80, nullable=true)
     */
    private $xart;

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
     * @ORM\Column(name="cart", type="string", length=10, nullable=true)
     */
    private $cart;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedida", type="string", length=2, nullable=true)
     */
    private $cmedida;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=2, nullable=true)
     */
    private $precio;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=2, nullable=true)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="descuento", type="float", precision=10, scale=2, nullable=true)
     */
    private $descuento;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="crubro", type="string", length=2, nullable=true)
     */
    private $crubro;

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
     * @var boolean
     *
     * @ORM\Column(name="anula", type="boolean", nullable=true)
     */
    private $anula = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cod1", type="string", length=1, nullable=true)
     */
    private $cod1 = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico = '000';



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
     * Set cdocum
     *
     * @param string $cdocum
     *
     * @return Dmovim
     */
    public function setCdocum($cdocum)
    {
        $this->cdocum = $cdocum;

        return $this;
    }

    /**
     * Get cdocum
     *
     * @return string
     */
    public function getCdocum()
    {
        return $this->cdocum;
    }

    /**
     * Set ndocum
     *
     * @param string $ndocum
     *
     * @return Dmovim
     */
    public function setNdocum($ndocum)
    {
        $this->ndocum = $ndocum;

        return $this;
    }

    /**
     * Get ndocum
     *
     * @return string
     */
    public function getNdocum()
    {
        return $this->ndocum;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Dmovim
     */
    public function setCsede($csede)
    {
        $this->csede = $csede;

        return $this;
    }

    /**
     * Get csede
     *
     * @return string
     */
    public function getCsede()
    {
        return $this->csede;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return Dmovim
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set item
     *
     * @param string $item
     *
     * @return Dmovim
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set xart
     *
     * @param string $xart
     *
     * @return Dmovim
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
     * Set clinea
     *
     * @param string $clinea
     *
     * @return Dmovim
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
     * @return Dmovim
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
     * @return Dmovim
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
     * Set cmedida
     *
     * @param string $cmedida
     *
     * @return Dmovim
     */
    public function setCmedida($cmedida)
    {
        $this->cmedida = $cmedida;

        return $this;
    }

    /**
     * Get cmedida
     *
     * @return string
     */
    public function getCmedida()
    {
        return $this->cmedida;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Dmovim
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     *
     * @return Dmovim
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set descuento
     *
     * @param float $descuento
     *
     * @return Dmovim
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return float
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Dmovim
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set crubro
     *
     * @param string $crubro
     *
     * @return Dmovim
     */
    public function setCrubro($crubro)
    {
        $this->crubro = $crubro;

        return $this;
    }

    /**
     * Get crubro
     *
     * @return string
     */
    public function getCrubro()
    {
        return $this->crubro;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Dmovim
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
     * @return Dmovim
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
     * @return Dmovim
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
     * @return Dmovim
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
     * Set anula
     *
     * @param boolean $anula
     *
     * @return Dmovim
     */
    public function setAnula($anula)
    {
        $this->anula = $anula;

        return $this;
    }

    /**
     * Get anula
     *
     * @return boolean
     */
    public function getAnula()
    {
        return $this->anula;
    }

    /**
     * Set cod1
     *
     * @param string $cod1
     *
     * @return Dmovim
     */
    public function setCod1($cod1)
    {
        $this->cod1 = $cod1;

        return $this;
    }

    /**
     * Get cod1
     *
     * @return string
     */
    public function getCod1()
    {
        return $this->cod1;
    }

    /**
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Dmovim
     */
    public function setCmedico($cmedico)
    {
        $this->cmedico = $cmedico;

        return $this;
    }

    /**
     * Get cmedico
     *
     * @return string
     */
    public function getCmedico()
    {
        return $this->cmedico;
    }
}
