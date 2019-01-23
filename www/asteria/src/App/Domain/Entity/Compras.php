<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compras
 *
 * @ORM\Table(name="compras", indexes={@ORM\Index(name="corigen", columns={"corigen", "fecha", "clave", "tdocum", "cdestino"})})
 * @ORM\Entity
 */
class Compras
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
     * @ORM\Column(name="cdocum", type="string", length=2, nullable=true)
     */
    private $cdocum;

    /**
     * @var string
     *
     * @ORM\Column(name="ndocum", type="string", length=10, nullable=true)
     */
    private $ndocum;

    /**
     * @var string
     *
     * @ORM\Column(name="corigen", type="string", length=4, nullable=true)
     */
    private $corigen;

    /**
     * @var string
     *
     * @ORM\Column(name="xorigen", type="string", length=40, nullable=true)
     */
    private $xorigen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tienecod", type="boolean", nullable=true)
     */
    private $tienecod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=6, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="tdocum", type="string", length=2, nullable=true)
     */
    private $tdocum;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="saldo", type="float", precision=10, scale=2, nullable=true)
     */
    private $saldo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchpago", type="date", nullable=true)
     */
    private $fchpago;

    /**
     * @var string
     *
     * @ORM\Column(name="tipdes", type="string", length=1, nullable=true)
     */
    private $tipdes;

    /**
     * @var string
     *
     * @ORM\Column(name="cdestino", type="string", length=4, nullable=true)
     */
    private $cdestino;

    /**
     * @var string
     *
     * @ORM\Column(name="cvende", type="string", length=2, nullable=true)
     */
    private $cvende;

    /**
     * @var string
     *
     * @ORM\Column(name="crelacio", type="string", length=2, nullable=true)
     */
    private $crelacio;

    /**
     * @var string
     *
     * @ORM\Column(name="nrelacio", type="string", length=10, nullable=true)
     */
    private $nrelacio;

    /**
     * @var float
     *
     * @ORM\Column(name="base", type="float", precision=10, scale=2, nullable=true)
     */
    private $base;

    /**
     * @var float
     *
     * @ORM\Column(name="pigv", type="float", precision=7, scale=3, nullable=true)
     */
    private $pigv;

    /**
     * @var float
     *
     * @ORM\Column(name="igv", type="float", precision=10, scale=2, nullable=true)
     */
    private $igv;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias", type="integer", nullable=true)
     */
    private $dias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vence", type="date", nullable=true)
     */
    private $vence;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * @var float
     *
     * @ORM\Column(name="pdescuen", type="float", precision=7, scale=2, nullable=true)
     */
    private $pdescuen;

    /**
     * @var string
     *
     * @ORM\Column(name="comprob", type="string", length=10, nullable=true)
     */
    private $comprob;

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=10, scale=4, nullable=true)
     */
    private $tipcam;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=230, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="cgasto", type="string", length=3, nullable=true)
     */
    private $cgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tieneigv", type="boolean", nullable=true)
     */
    private $tieneigv;

    /**
     * @var string
     *
     * @ORM\Column(name="rubro", type="string", length=2, nullable=true)
     */
    private $rubro;

    /**
     * @var string
     *
     * @ORM\Column(name="tipopago", type="string", length=3, nullable=true)
     */
    private $tipopago;

    /**
     * @var string
     *
     * @ORM\Column(name="cbanco", type="string", length=2, nullable=true)
     */
    private $cbanco;

    /**
     * @var string
     *
     * @ORM\Column(name="ncuenta", type="string", length=30, nullable=true)
     */
    private $ncuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

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
     * Set cdocum
     *
     * @param string $cdocum
     *
     * @return Compras
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
     * @return Compras
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
     * Set corigen
     *
     * @param string $corigen
     *
     * @return Compras
     */
    public function setCorigen($corigen)
    {
        $this->corigen = $corigen;

        return $this;
    }

    /**
     * Get corigen
     *
     * @return string
     */
    public function getCorigen()
    {
        return $this->corigen;
    }

    /**
     * Set xorigen
     *
     * @param string $xorigen
     *
     * @return Compras
     */
    public function setXorigen($xorigen)
    {
        $this->xorigen = $xorigen;

        return $this;
    }

    /**
     * Get xorigen
     *
     * @return string
     */
    public function getXorigen()
    {
        return $this->xorigen;
    }

    /**
     * Set tienecod
     *
     * @param boolean $tienecod
     *
     * @return Compras
     */
    public function setTienecod($tienecod)
    {
        $this->tienecod = $tienecod;

        return $this;
    }

    /**
     * Get tienecod
     *
     * @return boolean
     */
    public function getTienecod()
    {
        return $this->tienecod;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Compras
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
     * Set csede
     *
     * @param string $csede
     *
     * @return Compras
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
     * Set clave
     *
     * @param string $clave
     *
     * @return Compras
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set tdocum
     *
     * @param string $tdocum
     *
     * @return Compras
     */
    public function setTdocum($tdocum)
    {
        $this->tdocum = $tdocum;

        return $this;
    }

    /**
     * Get tdocum
     *
     * @return string
     */
    public function getTdocum()
    {
        return $this->tdocum;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Compras
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
     * Set saldo
     *
     * @param float $saldo
     *
     * @return Compras
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return float
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set fchpago
     *
     * @param \DateTime $fchpago
     *
     * @return Compras
     */
    public function setFchpago($fchpago)
    {
        $this->fchpago = $fchpago;

        return $this;
    }

    /**
     * Get fchpago
     *
     * @return \DateTime
     */
    public function getFchpago()
    {
        return $this->fchpago;
    }

    /**
     * Set tipdes
     *
     * @param string $tipdes
     *
     * @return Compras
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
     * Set cdestino
     *
     * @param string $cdestino
     *
     * @return Compras
     */
    public function setCdestino($cdestino)
    {
        $this->cdestino = $cdestino;

        return $this;
    }

    /**
     * Get cdestino
     *
     * @return string
     */
    public function getCdestino()
    {
        return $this->cdestino;
    }

    /**
     * Set cvende
     *
     * @param string $cvende
     *
     * @return Compras
     */
    public function setCvende($cvende)
    {
        $this->cvende = $cvende;

        return $this;
    }

    /**
     * Get cvende
     *
     * @return string
     */
    public function getCvende()
    {
        return $this->cvende;
    }

    /**
     * Set crelacio
     *
     * @param string $crelacio
     *
     * @return Compras
     */
    public function setCrelacio($crelacio)
    {
        $this->crelacio = $crelacio;

        return $this;
    }

    /**
     * Get crelacio
     *
     * @return string
     */
    public function getCrelacio()
    {
        return $this->crelacio;
    }

    /**
     * Set nrelacio
     *
     * @param string $nrelacio
     *
     * @return Compras
     */
    public function setNrelacio($nrelacio)
    {
        $this->nrelacio = $nrelacio;

        return $this;
    }

    /**
     * Get nrelacio
     *
     * @return string
     */
    public function getNrelacio()
    {
        return $this->nrelacio;
    }

    /**
     * Set base
     *
     * @param float $base
     *
     * @return Compras
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set pigv
     *
     * @param float $pigv
     *
     * @return Compras
     */
    public function setPigv($pigv)
    {
        $this->pigv = $pigv;

        return $this;
    }

    /**
     * Get pigv
     *
     * @return float
     */
    public function getPigv()
    {
        return $this->pigv;
    }

    /**
     * Set igv
     *
     * @param float $igv
     *
     * @return Compras
     */
    public function setIgv($igv)
    {
        $this->igv = $igv;

        return $this;
    }

    /**
     * Get igv
     *
     * @return float
     */
    public function getIgv()
    {
        return $this->igv;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Compras
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
     * Set dias
     *
     * @param integer $dias
     *
     * @return Compras
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set vence
     *
     * @param \DateTime $vence
     *
     * @return Compras
     */
    public function setVence($vence)
    {
        $this->vence = $vence;

        return $this;
    }

    /**
     * Get vence
     *
     * @return \DateTime
     */
    public function getVence()
    {
        return $this->vence;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Compras
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pdescuen
     *
     * @param float $pdescuen
     *
     * @return Compras
     */
    public function setPdescuen($pdescuen)
    {
        $this->pdescuen = $pdescuen;

        return $this;
    }

    /**
     * Get pdescuen
     *
     * @return float
     */
    public function getPdescuen()
    {
        return $this->pdescuen;
    }

    /**
     * Set comprob
     *
     * @param string $comprob
     *
     * @return Compras
     */
    public function setComprob($comprob)
    {
        $this->comprob = $comprob;

        return $this;
    }

    /**
     * Get comprob
     *
     * @return string
     */
    public function getComprob()
    {
        return $this->comprob;
    }

    /**
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Compras
     */
    public function setTipcam($tipcam)
    {
        $this->tipcam = $tipcam;

        return $this;
    }

    /**
     * Get tipcam
     *
     * @return float
     */
    public function getTipcam()
    {
        return $this->tipcam;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Compras
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
     * Set cgasto
     *
     * @param string $cgasto
     *
     * @return Compras
     */
    public function setCgasto($cgasto)
    {
        $this->cgasto = $cgasto;

        return $this;
    }

    /**
     * Get cgasto
     *
     * @return string
     */
    public function getCgasto()
    {
        return $this->cgasto;
    }

    /**
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Compras
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;

        return $this;
    }

    /**
     * Get ruc
     *
     * @return string
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set tieneigv
     *
     * @param boolean $tieneigv
     *
     * @return Compras
     */
    public function setTieneigv($tieneigv)
    {
        $this->tieneigv = $tieneigv;

        return $this;
    }

    /**
     * Get tieneigv
     *
     * @return boolean
     */
    public function getTieneigv()
    {
        return $this->tieneigv;
    }

    /**
     * Set rubro
     *
     * @param string $rubro
     *
     * @return Compras
     */
    public function setRubro($rubro)
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * Get rubro
     *
     * @return string
     */
    public function getRubro()
    {
        return $this->rubro;
    }

    /**
     * Set tipopago
     *
     * @param string $tipopago
     *
     * @return Compras
     */
    public function setTipopago($tipopago)
    {
        $this->tipopago = $tipopago;

        return $this;
    }

    /**
     * Get tipopago
     *
     * @return string
     */
    public function getTipopago()
    {
        return $this->tipopago;
    }

    /**
     * Set cbanco
     *
     * @param string $cbanco
     *
     * @return Compras
     */
    public function setCbanco($cbanco)
    {
        $this->cbanco = $cbanco;

        return $this;
    }

    /**
     * Get cbanco
     *
     * @return string
     */
    public function getCbanco()
    {
        return $this->cbanco;
    }

    /**
     * Set ncuenta
     *
     * @param string $ncuenta
     *
     * @return Compras
     */
    public function setNcuenta($ncuenta)
    {
        $this->ncuenta = $ncuenta;

        return $this;
    }

    /**
     * Get ncuenta
     *
     * @return string
     */
    public function getNcuenta()
    {
        return $this->ncuenta;
    }

    /**
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Compras
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

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Compras
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
     * @return Compras
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
     * @return Compras
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
     * @return Compras
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
