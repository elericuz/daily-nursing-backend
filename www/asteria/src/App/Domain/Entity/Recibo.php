<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibo
 *
 * @ORM\Table(name="recibo", indexes={@ORM\Index(name="nrec", columns={"nrec"})})
 * @ORM\Entity
 */
class Recibo
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
     * @ORM\Column(name="nrec", type="string", length=5, nullable=false)
     */
    private $nrec = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=true)
     */
    private $cpac;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=4, nullable=true)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda = 'S';

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=10, scale=3, nullable=true)
     */
    private $tipcam = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="tipopago", type="string", length=3, nullable=true)
     */
    private $tipopago;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=2, nullable=true)
     */
    private $total = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="cdocum", type="string", length=2, nullable=true)
     */
    private $cdocum = '01';

    /**
     * @var string
     *
     * @ORM\Column(name="ndocum", type="string", length=10, nullable=true)
     */
    private $ndocum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="varios", type="boolean", nullable=true)
     */
    private $varios = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=200, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="rubro", type="string", length=1, nullable=true)
     */
    private $rubro;

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
     * @ORM\Column(name="periodo", type="string", length=6, nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="reg", type="string", length=3, nullable=true)
     */
    private $reg;



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
     * Set nrec
     *
     * @param string $nrec
     *
     * @return Recibo
     */
    public function setNrec($nrec)
    {
        $this->nrec = $nrec;

        return $this;
    }

    /**
     * Get nrec
     *
     * @return string
     */
    public function getNrec()
    {
        return $this->nrec;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Recibo
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
     * Set cpac
     *
     * @param string $cpac
     *
     * @return Recibo
     */
    public function setCpac($cpac)
    {
        $this->cpac = $cpac;

        return $this;
    }

    /**
     * Get cpac
     *
     * @return string
     */
    public function getCpac()
    {
        return $this->cpac;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Recibo
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
     * Set cliente
     *
     * @param string $cliente
     *
     * @return Recibo
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Recibo
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
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Recibo
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
     * Set tipopago
     *
     * @param string $tipopago
     *
     * @return Recibo
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
     * Set total
     *
     * @param float $total
     *
     * @return Recibo
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
     * Set cdocum
     *
     * @param string $cdocum
     *
     * @return Recibo
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
     * @return Recibo
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
     * Set varios
     *
     * @param boolean $varios
     *
     * @return Recibo
     */
    public function setVarios($varios)
    {
        $this->varios = $varios;

        return $this;
    }

    /**
     * Get varios
     *
     * @return boolean
     */
    public function getVarios()
    {
        return $this->varios;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Recibo
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
     * Set rubro
     *
     * @param string $rubro
     *
     * @return Recibo
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
     * Set cbanco
     *
     * @param string $cbanco
     *
     * @return Recibo
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
     * @return Recibo
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
     * Set periodo
     *
     * @param string $periodo
     *
     * @return Recibo
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set reg
     *
     * @param string $reg
     *
     * @return Recibo
     */
    public function setReg($reg)
    {
        $this->reg = $reg;

        return $this;
    }

    /**
     * Get reg
     *
     * @return string
     */
    public function getReg()
    {
        return $this->reg;
    }
}
