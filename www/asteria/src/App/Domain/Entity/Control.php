<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Control
 *
 * @ORM\Table(name="control", indexes={@ORM\Index(name="clave", columns={"clave", "cpac"})})
 * @ORM\Entity
 */
class Control
{
    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clave = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=10, scale=3, nullable=true)
     */
    private $tipcam;

    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=true)
     */
    private $cpac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=45, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=2, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="casegura", type="string", length=4, nullable=true)
     */
    private $casegura;

    /**
     * @var string
     *
     * @ORM\Column(name="cempresa", type="string", length=4, nullable=true)
     */
    private $cempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="poliza", type="string", length=20, nullable=true)
     */
    private $poliza;

    /**
     * @var string
     *
     * @ORM\Column(name="plan", type="string", length=1, nullable=true)
     */
    private $plan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchultvis", type="date", nullable=true)
     */
    private $fchultvis;

    /**
     * @var float
     *
     * @ORM\Column(name="montopres", type="float", precision=10, scale=2, nullable=true)
     */
    private $montopres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchacepta", type="date", nullable=true)
     */
    private $fchacepta;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float", precision=10, scale=2, nullable=true)
     */
    private $subtotal;

    /**
     * @var float
     *
     * @ORM\Column(name="igv", type="float", precision=10, scale=2, nullable=true)
     */
    private $igv;

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
     * @var float
     *
     * @ORM\Column(name="saldopac", type="float", precision=10, scale=2, nullable=true)
     */
    private $saldopac;

    /**
     * @var float
     *
     * @ORM\Column(name="saldoase", type="float", precision=10, scale=2, nullable=true)
     */
    private $saldoase;

    /**
     * @var float
     *
     * @ORM\Column(name="totpagseg", type="float", precision=10, scale=2, nullable=true)
     */
    private $totpagseg;

    /**
     * @var float
     *
     * @ORM\Column(name="totpagpac", type="float", precision=10, scale=2, nullable=true)
     */
    private $totpagpac;

    /**
     * @var float
     *
     * @ORM\Column(name="cobertura", type="float", precision=10, scale=2, nullable=true)
     */
    private $cobertura;

    /**
     * @var float
     *
     * @ORM\Column(name="deducible", type="float", precision=10, scale=2, nullable=true)
     */
    private $deducible;

    /**
     * @var float
     *
     * @ORM\Column(name="coaseguro", type="float", precision=10, scale=2, nullable=true)
     */
    private $coaseguro;

    /**
     * @var integer
     *
     * @ORM\Column(name="pzatra", type="integer", nullable=true)
     */
    private $pzatra;

    /**
     * @var float
     *
     * @ORM\Column(name="vdeduc", type="float", precision=8, scale=2, nullable=true)
     */
    private $vdeduc;

    /**
     * @var float
     *
     * @ORM\Column(name="vcoase", type="float", precision=8, scale=2, nullable=true)
     */
    private $vcoase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presup", type="boolean", nullable=true)
     */
    private $presup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="atendio", type="boolean", nullable=true)
     */
    private $atendio;

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
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=120, nullable=true)
     */
    private $observa;

    /**
     * @var float
     *
     * @ORM\Column(name="basepres", type="float", precision=10, scale=2, nullable=true)
     */
    private $basepres;

    /**
     * @var float
     *
     * @ORM\Column(name="igvpres", type="float", precision=10, scale=2, nullable=true)
     */
    private $igvpres;

    /**
     * @var float
     *
     * @ORM\Column(name="totalpres", type="float", precision=10, scale=2, nullable=true)
     */
    private $totalpres;

    /**
     * @var float
     *
     * @ORM\Column(name="descuento", type="float", precision=10, scale=2, nullable=true)
     */
    private $descuento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ting", type="boolean", nullable=true)
     */
    private $ting;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="alta", type="date", nullable=true)
     */
    private $alta;

    /**
     * @var string
     *
     * @ORM\Column(name="edo", type="string", length=1, nullable=true)
     */
    private $edo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="canje", type="boolean", nullable=true)
     */
    private $canje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nextcita", type="date", nullable=true)
     */
    private $nextcita;

    /**
     * @var float
     *
     * @ORM\Column(name="labsol", type="float", precision=10, scale=2, nullable=true)
     */
    private $labsol = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="labdol", type="float", precision=10, scale=2, nullable=true)
     */
    private $labdol = '0.00';



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
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Control
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
     * Set csede
     *
     * @param string $csede
     *
     * @return Control
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
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Control
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
     * Set cpac
     *
     * @param string $cpac
     *
     * @return Control
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Control
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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Control
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
     * Set edad
     *
     * @param integer $edad
     *
     * @return Control
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Control
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Control
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Control
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set casegura
     *
     * @param string $casegura
     *
     * @return Control
     */
    public function setCasegura($casegura)
    {
        $this->casegura = $casegura;

        return $this;
    }

    /**
     * Get casegura
     *
     * @return string
     */
    public function getCasegura()
    {
        return $this->casegura;
    }

    /**
     * Set cempresa
     *
     * @param string $cempresa
     *
     * @return Control
     */
    public function setCempresa($cempresa)
    {
        $this->cempresa = $cempresa;

        return $this;
    }

    /**
     * Get cempresa
     *
     * @return string
     */
    public function getCempresa()
    {
        return $this->cempresa;
    }

    /**
     * Set poliza
     *
     * @param string $poliza
     *
     * @return Control
     */
    public function setPoliza($poliza)
    {
        $this->poliza = $poliza;

        return $this;
    }

    /**
     * Get poliza
     *
     * @return string
     */
    public function getPoliza()
    {
        return $this->poliza;
    }

    /**
     * Set plan
     *
     * @param string $plan
     *
     * @return Control
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set fchultvis
     *
     * @param \DateTime $fchultvis
     *
     * @return Control
     */
    public function setFchultvis($fchultvis)
    {
        $this->fchultvis = $fchultvis;

        return $this;
    }

    /**
     * Get fchultvis
     *
     * @return \DateTime
     */
    public function getFchultvis()
    {
        return $this->fchultvis;
    }

    /**
     * Set montopres
     *
     * @param float $montopres
     *
     * @return Control
     */
    public function setMontopres($montopres)
    {
        $this->montopres = $montopres;

        return $this;
    }

    /**
     * Get montopres
     *
     * @return float
     */
    public function getMontopres()
    {
        return $this->montopres;
    }

    /**
     * Set fchacepta
     *
     * @param \DateTime $fchacepta
     *
     * @return Control
     */
    public function setFchacepta($fchacepta)
    {
        $this->fchacepta = $fchacepta;

        return $this;
    }

    /**
     * Get fchacepta
     *
     * @return \DateTime
     */
    public function getFchacepta()
    {
        return $this->fchacepta;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     *
     * @return Control
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set igv
     *
     * @param float $igv
     *
     * @return Control
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
     * Set total
     *
     * @param float $total
     *
     * @return Control
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
     * @return Control
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
     * Set saldopac
     *
     * @param float $saldopac
     *
     * @return Control
     */
    public function setSaldopac($saldopac)
    {
        $this->saldopac = $saldopac;

        return $this;
    }

    /**
     * Get saldopac
     *
     * @return float
     */
    public function getSaldopac()
    {
        return $this->saldopac;
    }

    /**
     * Set saldoase
     *
     * @param float $saldoase
     *
     * @return Control
     */
    public function setSaldoase($saldoase)
    {
        $this->saldoase = $saldoase;

        return $this;
    }

    /**
     * Get saldoase
     *
     * @return float
     */
    public function getSaldoase()
    {
        return $this->saldoase;
    }

    /**
     * Set totpagseg
     *
     * @param float $totpagseg
     *
     * @return Control
     */
    public function setTotpagseg($totpagseg)
    {
        $this->totpagseg = $totpagseg;

        return $this;
    }

    /**
     * Get totpagseg
     *
     * @return float
     */
    public function getTotpagseg()
    {
        return $this->totpagseg;
    }

    /**
     * Set totpagpac
     *
     * @param float $totpagpac
     *
     * @return Control
     */
    public function setTotpagpac($totpagpac)
    {
        $this->totpagpac = $totpagpac;

        return $this;
    }

    /**
     * Get totpagpac
     *
     * @return float
     */
    public function getTotpagpac()
    {
        return $this->totpagpac;
    }

    /**
     * Set cobertura
     *
     * @param float $cobertura
     *
     * @return Control
     */
    public function setCobertura($cobertura)
    {
        $this->cobertura = $cobertura;

        return $this;
    }

    /**
     * Get cobertura
     *
     * @return float
     */
    public function getCobertura()
    {
        return $this->cobertura;
    }

    /**
     * Set deducible
     *
     * @param float $deducible
     *
     * @return Control
     */
    public function setDeducible($deducible)
    {
        $this->deducible = $deducible;

        return $this;
    }

    /**
     * Get deducible
     *
     * @return float
     */
    public function getDeducible()
    {
        return $this->deducible;
    }

    /**
     * Set coaseguro
     *
     * @param float $coaseguro
     *
     * @return Control
     */
    public function setCoaseguro($coaseguro)
    {
        $this->coaseguro = $coaseguro;

        return $this;
    }

    /**
     * Get coaseguro
     *
     * @return float
     */
    public function getCoaseguro()
    {
        return $this->coaseguro;
    }

    /**
     * Set pzatra
     *
     * @param integer $pzatra
     *
     * @return Control
     */
    public function setPzatra($pzatra)
    {
        $this->pzatra = $pzatra;

        return $this;
    }

    /**
     * Get pzatra
     *
     * @return integer
     */
    public function getPzatra()
    {
        return $this->pzatra;
    }

    /**
     * Set vdeduc
     *
     * @param float $vdeduc
     *
     * @return Control
     */
    public function setVdeduc($vdeduc)
    {
        $this->vdeduc = $vdeduc;

        return $this;
    }

    /**
     * Get vdeduc
     *
     * @return float
     */
    public function getVdeduc()
    {
        return $this->vdeduc;
    }

    /**
     * Set vcoase
     *
     * @param float $vcoase
     *
     * @return Control
     */
    public function setVcoase($vcoase)
    {
        $this->vcoase = $vcoase;

        return $this;
    }

    /**
     * Get vcoase
     *
     * @return float
     */
    public function getVcoase()
    {
        return $this->vcoase;
    }

    /**
     * Set presup
     *
     * @param boolean $presup
     *
     * @return Control
     */
    public function setPresup($presup)
    {
        $this->presup = $presup;

        return $this;
    }

    /**
     * Get presup
     *
     * @return boolean
     */
    public function getPresup()
    {
        return $this->presup;
    }

    /**
     * Set atendio
     *
     * @param boolean $atendio
     *
     * @return Control
     */
    public function setAtendio($atendio)
    {
        $this->atendio = $atendio;

        return $this;
    }

    /**
     * Get atendio
     *
     * @return boolean
     */
    public function getAtendio()
    {
        return $this->atendio;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Control
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
     * @return Control
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
     * @return Control
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
     * @return Control
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
     * Set observa
     *
     * @param string $observa
     *
     * @return Control
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
     * Set basepres
     *
     * @param float $basepres
     *
     * @return Control
     */
    public function setBasepres($basepres)
    {
        $this->basepres = $basepres;

        return $this;
    }

    /**
     * Get basepres
     *
     * @return float
     */
    public function getBasepres()
    {
        return $this->basepres;
    }

    /**
     * Set igvpres
     *
     * @param float $igvpres
     *
     * @return Control
     */
    public function setIgvpres($igvpres)
    {
        $this->igvpres = $igvpres;

        return $this;
    }

    /**
     * Get igvpres
     *
     * @return float
     */
    public function getIgvpres()
    {
        return $this->igvpres;
    }

    /**
     * Set totalpres
     *
     * @param float $totalpres
     *
     * @return Control
     */
    public function setTotalpres($totalpres)
    {
        $this->totalpres = $totalpres;

        return $this;
    }

    /**
     * Get totalpres
     *
     * @return float
     */
    public function getTotalpres()
    {
        return $this->totalpres;
    }

    /**
     * Set descuento
     *
     * @param float $descuento
     *
     * @return Control
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
     * Set ting
     *
     * @param boolean $ting
     *
     * @return Control
     */
    public function setTing($ting)
    {
        $this->ting = $ting;

        return $this;
    }

    /**
     * Get ting
     *
     * @return boolean
     */
    public function getTing()
    {
        return $this->ting;
    }

    /**
     * Set alta
     *
     * @param \DateTime $alta
     *
     * @return Control
     */
    public function setAlta($alta)
    {
        $this->alta = $alta;

        return $this;
    }

    /**
     * Get alta
     *
     * @return \DateTime
     */
    public function getAlta()
    {
        return $this->alta;
    }

    /**
     * Set edo
     *
     * @param string $edo
     *
     * @return Control
     */
    public function setEdo($edo)
    {
        $this->edo = $edo;

        return $this;
    }

    /**
     * Get edo
     *
     * @return string
     */
    public function getEdo()
    {
        return $this->edo;
    }

    /**
     * Set canje
     *
     * @param boolean $canje
     *
     * @return Control
     */
    public function setCanje($canje)
    {
        $this->canje = $canje;

        return $this;
    }

    /**
     * Get canje
     *
     * @return boolean
     */
    public function getCanje()
    {
        return $this->canje;
    }

    /**
     * Set nextcita
     *
     * @param \DateTime $nextcita
     *
     * @return Control
     */
    public function setNextcita($nextcita)
    {
        $this->nextcita = $nextcita;

        return $this;
    }

    /**
     * Get nextcita
     *
     * @return \DateTime
     */
    public function getNextcita()
    {
        return $this->nextcita;
    }

    /**
     * Set labsol
     *
     * @param float $labsol
     *
     * @return Control
     */
    public function setLabsol($labsol)
    {
        $this->labsol = $labsol;

        return $this;
    }

    /**
     * Get labsol
     *
     * @return float
     */
    public function getLabsol()
    {
        return $this->labsol;
    }

    /**
     * Set labdol
     *
     * @param float $labdol
     *
     * @return Control
     */
    public function setLabdol($labdol)
    {
        $this->labdol = $labdol;

        return $this;
    }

    /**
     * Get labdol
     *
     * @return float
     */
    public function getLabdol()
    {
        return $this->labdol;
    }
}
