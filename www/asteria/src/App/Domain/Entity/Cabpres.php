<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabpres
 *
 * @ORM\Table(name="cabpres", indexes={@ORM\Index(name="clave", columns={"clave", "cpac"})})
 * @ORM\Entity
 */
class Cabpres
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
     * @ORM\Column(name="planp", type="string", length=1, nullable=true)
     */
    private $planp;

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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * Set planp
     *
     * @param string $planp
     *
     * @return Cabpres
     */
    public function setPlanp($planp)
    {
        $this->planp = $planp;

        return $this;
    }

    /**
     * Get planp
     *
     * @return string
     */
    public function getPlanp()
    {
        return $this->planp;
    }

    /**
     * Set fchultvis
     *
     * @param \DateTime $fchultvis
     *
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
     * @return Cabpres
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
