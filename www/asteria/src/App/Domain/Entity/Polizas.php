<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Polizas
 *
 * @ORM\Table(name="polizas", indexes={@ORM\Index(name="cempresa", columns={"cempresa"})})
 * @ORM\Entity
 */
class Polizas
{
    /**
     * @var string
     *
     * @ORM\Column(name="poliza", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $poliza = '';

    /**
     * @var string
     *
     * @ORM\Column(name="plan", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $plan = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cempresa", type="string", length=4, nullable=true)
     */
    private $cempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="casegura", type="string", length=4, nullable=true)
     */
    private $casegura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchinicio", type="date", nullable=true)
     */
    private $fchinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchfin", type="date", nullable=true)
     */
    private $fchfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchmod", type="date", nullable=true)
     */
    private $fchmod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchanula", type="date", nullable=true)
     */
    private $fchanula;

    /**
     * @var string
     *
     * @ORM\Column(name="monpoliza", type="string", length=1, nullable=true)
     */
    private $monpoliza;

    /**
     * @var float
     *
     * @ORM\Column(name="cobertura", type="float", precision=12, scale=2, nullable=true)
     */
    private $cobertura;

    /**
     * @var string
     *
     * @ORM\Column(name="moncon", type="string", length=1, nullable=true)
     */
    private $moncon;

    /**
     * @var string
     *
     * @ORM\Column(name="mondedxpza", type="string", length=1, nullable=true)
     */
    private $mondedxpza;

    /**
     * @var float
     *
     * @ORM\Column(name="dedxpza", type="float", precision=12, scale=2, nullable=true)
     */
    private $dedxpza;

    /**
     * @var float
     *
     * @ORM\Column(name="coaseguro", type="float", precision=9, scale=3, nullable=true)
     */
    private $coaseguro;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=300, nullable=true)
     */
    private $observa;

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
     * @ORM\Column(name="activa", type="boolean", nullable=true)
     */
    private $activa;

    /**
     * @var float
     *
     * @ORM\Column(name="consulta", type="float", precision=10, scale=2, nullable=true)
     */
    private $consulta;



    /**
     * Set poliza
     *
     * @param string $poliza
     *
     * @return Polizas
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
     * @return Polizas
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
     * Set cempresa
     *
     * @param string $cempresa
     *
     * @return Polizas
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
     * Set casegura
     *
     * @param string $casegura
     *
     * @return Polizas
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
     * Set fchinicio
     *
     * @param \DateTime $fchinicio
     *
     * @return Polizas
     */
    public function setFchinicio($fchinicio)
    {
        $this->fchinicio = $fchinicio;

        return $this;
    }

    /**
     * Get fchinicio
     *
     * @return \DateTime
     */
    public function getFchinicio()
    {
        return $this->fchinicio;
    }

    /**
     * Set fchfin
     *
     * @param \DateTime $fchfin
     *
     * @return Polizas
     */
    public function setFchfin($fchfin)
    {
        $this->fchfin = $fchfin;

        return $this;
    }

    /**
     * Get fchfin
     *
     * @return \DateTime
     */
    public function getFchfin()
    {
        return $this->fchfin;
    }

    /**
     * Set fchmod
     *
     * @param \DateTime $fchmod
     *
     * @return Polizas
     */
    public function setFchmod($fchmod)
    {
        $this->fchmod = $fchmod;

        return $this;
    }

    /**
     * Get fchmod
     *
     * @return \DateTime
     */
    public function getFchmod()
    {
        return $this->fchmod;
    }

    /**
     * Set fchanula
     *
     * @param \DateTime $fchanula
     *
     * @return Polizas
     */
    public function setFchanula($fchanula)
    {
        $this->fchanula = $fchanula;

        return $this;
    }

    /**
     * Get fchanula
     *
     * @return \DateTime
     */
    public function getFchanula()
    {
        return $this->fchanula;
    }

    /**
     * Set monpoliza
     *
     * @param string $monpoliza
     *
     * @return Polizas
     */
    public function setMonpoliza($monpoliza)
    {
        $this->monpoliza = $monpoliza;

        return $this;
    }

    /**
     * Get monpoliza
     *
     * @return string
     */
    public function getMonpoliza()
    {
        return $this->monpoliza;
    }

    /**
     * Set cobertura
     *
     * @param float $cobertura
     *
     * @return Polizas
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
     * Set moncon
     *
     * @param string $moncon
     *
     * @return Polizas
     */
    public function setMoncon($moncon)
    {
        $this->moncon = $moncon;

        return $this;
    }

    /**
     * Get moncon
     *
     * @return string
     */
    public function getMoncon()
    {
        return $this->moncon;
    }

    /**
     * Set mondedxpza
     *
     * @param string $mondedxpza
     *
     * @return Polizas
     */
    public function setMondedxpza($mondedxpza)
    {
        $this->mondedxpza = $mondedxpza;

        return $this;
    }

    /**
     * Get mondedxpza
     *
     * @return string
     */
    public function getMondedxpza()
    {
        return $this->mondedxpza;
    }

    /**
     * Set dedxpza
     *
     * @param float $dedxpza
     *
     * @return Polizas
     */
    public function setDedxpza($dedxpza)
    {
        $this->dedxpza = $dedxpza;

        return $this;
    }

    /**
     * Get dedxpza
     *
     * @return float
     */
    public function getDedxpza()
    {
        return $this->dedxpza;
    }

    /**
     * Set coaseguro
     *
     * @param float $coaseguro
     *
     * @return Polizas
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
     * Set observa
     *
     * @param string $observa
     *
     * @return Polizas
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
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Polizas
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
     * @return Polizas
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
     * @return Polizas
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
     * @return Polizas
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
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Polizas
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean
     */
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set consulta
     *
     * @param float $consulta
     *
     * @return Polizas
     */
    public function setConsulta($consulta)
    {
        $this->consulta = $consulta;

        return $this;
    }

    /**
     * Get consulta
     *
     * @return float
     */
    public function getConsulta()
    {
        return $this->consulta;
    }
}
