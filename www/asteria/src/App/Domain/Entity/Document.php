<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document", indexes={@ORM\Index(name="cdocum", columns={"cdocum"})})
 * @ORM\Entity
 */
class Document
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
    private $cdocum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xdocum", type="string", length=40, nullable=true)
     */
    private $xdocum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="muestock", type="integer", nullable=true)
     */
    private $muestock = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tipodoc", type="string", length=1, nullable=true)
     */
    private $tipodoc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="crelacion", type="string", length=2, nullable=true)
     */
    private $crelacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tieneigv", type="integer", nullable=true)
     */
    private $tieneigv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tiporig", type="string", length=1, nullable=true)
     */
    private $tiporig = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tipdes", type="string", length=1, nullable=true)
     */
    private $tipdes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=3, nullable=true)
     */
    private $serie = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="correla", type="float", precision=10, scale=2, nullable=true)
     */
    private $correla = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="precdoc", type="string", length=1, nullable=true)
     */
    private $precdoc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seguridad", type="string", length=1, nullable=true)
     */
    private $seguridad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="venta", type="integer", nullable=true)
     */
    private $venta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="compra", type="integer", nullable=true)
     */
    private $compra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codcon", type="string", length=2, nullable=true)
     */
    private $codcon = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="signo", type="boolean", nullable=true)
     */
    private $signo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="abrevia", type="string", length=3, nullable=true)
     */
    private $abrevia;



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
     * @return Document
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
     * Set xdocum
     *
     * @param string $xdocum
     *
     * @return Document
     */
    public function setXdocum($xdocum)
    {
        $this->xdocum = $xdocum;

        return $this;
    }

    /**
     * Get xdocum
     *
     * @return string
     */
    public function getXdocum()
    {
        return $this->xdocum;
    }

    /**
     * Set muestock
     *
     * @param integer $muestock
     *
     * @return Document
     */
    public function setMuestock($muestock)
    {
        $this->muestock = $muestock;

        return $this;
    }

    /**
     * Get muestock
     *
     * @return integer
     */
    public function getMuestock()
    {
        return $this->muestock;
    }

    /**
     * Set tipodoc
     *
     * @param string $tipodoc
     *
     * @return Document
     */
    public function setTipodoc($tipodoc)
    {
        $this->tipodoc = $tipodoc;

        return $this;
    }

    /**
     * Get tipodoc
     *
     * @return string
     */
    public function getTipodoc()
    {
        return $this->tipodoc;
    }

    /**
     * Set crelacion
     *
     * @param string $crelacion
     *
     * @return Document
     */
    public function setCrelacion($crelacion)
    {
        $this->crelacion = $crelacion;

        return $this;
    }

    /**
     * Get crelacion
     *
     * @return string
     */
    public function getCrelacion()
    {
        return $this->crelacion;
    }

    /**
     * Set tieneigv
     *
     * @param integer $tieneigv
     *
     * @return Document
     */
    public function setTieneigv($tieneigv)
    {
        $this->tieneigv = $tieneigv;

        return $this;
    }

    /**
     * Get tieneigv
     *
     * @return integer
     */
    public function getTieneigv()
    {
        return $this->tieneigv;
    }

    /**
     * Set tiporig
     *
     * @param string $tiporig
     *
     * @return Document
     */
    public function setTiporig($tiporig)
    {
        $this->tiporig = $tiporig;

        return $this;
    }

    /**
     * Get tiporig
     *
     * @return string
     */
    public function getTiporig()
    {
        return $this->tiporig;
    }

    /**
     * Set tipdes
     *
     * @param string $tipdes
     *
     * @return Document
     */
    public function setTipdes($tipdes)
    {
        $this->tipdes = $tipdes;

        return $this;
    }

    /**
     * Get tipdes
     *
     * @return string
     */
    public function getTipdes()
    {
        return $this->tipdes;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return Document
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
     * Set correla
     *
     * @param float $correla
     *
     * @return Document
     */
    public function setCorrela($correla)
    {
        $this->correla = $correla;

        return $this;
    }

    /**
     * Get correla
     *
     * @return float
     */
    public function getCorrela()
    {
        return $this->correla;
    }

    /**
     * Set precdoc
     *
     * @param string $precdoc
     *
     * @return Document
     */
    public function setPrecdoc($precdoc)
    {
        $this->precdoc = $precdoc;

        return $this;
    }

    /**
     * Get precdoc
     *
     * @return string
     */
    public function getPrecdoc()
    {
        return $this->precdoc;
    }

    /**
     * Set seguridad
     *
     * @param string $seguridad
     *
     * @return Document
     */
    public function setSeguridad($seguridad)
    {
        $this->seguridad = $seguridad;

        return $this;
    }

    /**
     * Get seguridad
     *
     * @return string
     */
    public function getSeguridad()
    {
        return $this->seguridad;
    }

    /**
     * Set venta
     *
     * @param integer $venta
     *
     * @return Document
     */
    public function setVenta($venta)
    {
        $this->venta = $venta;

        return $this;
    }

    /**
     * Get venta
     *
     * @return integer
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set compra
     *
     * @param integer $compra
     *
     * @return Document
     */
    public function setCompra($compra)
    {
        $this->compra = $compra;

        return $this;
    }

    /**
     * Get compra
     *
     * @return integer
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set codcon
     *
     * @param string $codcon
     *
     * @return Document
     */
    public function setCodcon($codcon)
    {
        $this->codcon = $codcon;

        return $this;
    }

    /**
     * Get codcon
     *
     * @return string
     */
    public function getCodcon()
    {
        return $this->codcon;
    }

    /**
     * Set signo
     *
     * @param boolean $signo
     *
     * @return Document
     */
    public function setSigno($signo)
    {
        $this->signo = $signo;

        return $this;
    }

    /**
     * Get signo
     *
     * @return boolean
     */
    public function getSigno()
    {
        return $this->signo;
    }

    /**
     * Set abrevia
     *
     * @param string $abrevia
     *
     * @return Document
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
}
