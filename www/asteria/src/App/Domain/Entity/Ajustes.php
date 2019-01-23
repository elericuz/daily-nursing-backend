<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ajustes
 *
 * @ORM\Table(name="ajustes", uniqueConstraints={@ORM\UniqueConstraint(name="cajuste", columns={"cajuste"})})
 * @ORM\Entity
 */
class Ajustes
{
    /**
     * @var string
     *
     * @ORM\Column(name="cajuste", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cajuste = '';

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
     * @ORM\Column(name="observa", type="string", length=100, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="sol", type="string", length=1, nullable=true)
     */
    private $sol;

    /**
     * @var string
     *
     * @ORM\Column(name="dolar", type="string", length=1, nullable=true)
     */
    private $dolar;

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=10, scale=3, nullable=true)
     */
    private $tipcam;

    /**
     * @var float
     *
     * @ORM\Column(name="montosol", type="float", precision=10, scale=2, nullable=true)
     */
    private $montosol;

    /**
     * @var float
     *
     * @ORM\Column(name="montodol", type="float", precision=10, scale=2, nullable=true)
     */
    private $montodol;

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
     * Get cajuste
     *
     * @return string
     */
    public function getCajuste()
    {
        return $this->cajuste;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Ajustes
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
     * @return Ajustes
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
     * Set observa
     *
     * @param string $observa
     *
     * @return Ajustes
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
     * Set sol
     *
     * @param string $sol
     *
     * @return Ajustes
     */
    public function setSol($sol)
    {
        $this->sol = $sol;

        return $this;
    }

    /**
     * Get sol
     *
     * @return string
     */
    public function getSol()
    {
        return $this->sol;
    }

    /**
     * Set dolar
     *
     * @param string $dolar
     *
     * @return Ajustes
     */
    public function setDolar($dolar)
    {
        $this->dolar = $dolar;

        return $this;
    }

    /**
     * Get dolar
     *
     * @return string
     */
    public function getDolar()
    {
        return $this->dolar;
    }

    /**
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Ajustes
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
     * Set montosol
     *
     * @param float $montosol
     *
     * @return Ajustes
     */
    public function setMontosol($montosol)
    {
        $this->montosol = $montosol;

        return $this;
    }

    /**
     * Get montosol
     *
     * @return float
     */
    public function getMontosol()
    {
        return $this->montosol;
    }

    /**
     * Set montodol
     *
     * @param float $montodol
     *
     * @return Ajustes
     */
    public function setMontodol($montodol)
    {
        $this->montodol = $montodol;

        return $this;
    }

    /**
     * Get montodol
     *
     * @return float
     */
    public function getMontodol()
    {
        return $this->montodol;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Ajustes
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
     * @return Ajustes
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
     * @return Ajustes
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
     * @return Ajustes
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
