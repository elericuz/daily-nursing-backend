<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", indexes={@ORM\Index(name="cclien", columns={"cclien"}), @ORM\Index(name="ruc", columns={"ruc"})})
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="xclien", type="string", length=60, nullable=true)
     */
    private $xclien;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="cclien", type="string", length=4, nullable=true)
     */
    private $cclien;

    /**
     * @var string
     *
     * @ORM\Column(name="razon", type="string", length=65, nullable=true)
     */
    private $razon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finicio", type="date", nullable=true)
     */
    private $finicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ffin", type="date", nullable=true)
     */
    private $ffin;

    /**
     * @var string
     *
     * @ORM\Column(name="telef1", type="string", length=15, nullable=true)
     */
    private $telef1;

    /**
     * @var string
     *
     * @ORM\Column(name="telef2", type="string", length=15, nullable=true)
     */
    private $telef2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="direcc", type="string", length=95, nullable=true)
     */
    private $direcc;

    /**
     * @var string
     *
     * @ORM\Column(name="codubica", type="string", length=6, nullable=true)
     */
    private $codubica;

    /**
     * @var float
     *
     * @ORM\Column(name="limcred", type="float", precision=10, scale=2, nullable=true)
     */
    private $limcred;

    /**
     * @var float
     *
     * @ORM\Column(name="ventas", type="float", precision=10, scale=2, nullable=true)
     */
    private $ventas;

    /**
     * @var string
     *
     * @ORM\Column(name="categor", type="string", length=1, nullable=true)
     */
    private $categor;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pagweb", type="string", length=40, nullable=true)
     */
    private $pagweb;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=40, nullable=true)
     */
    private $contacto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cumple", type="date", nullable=true)
     */
    private $cumple;

    /**
     * @var float
     *
     * @ORM\Column(name="pagos", type="float", precision=10, scale=2, nullable=true)
     */
    private $pagos;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="text", length=65535, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="cgiro", type="string", length=3, nullable=true)
     */
    private $cgiro;

    /**
     * @var float
     *
     * @ORM\Column(name="deudasol", type="float", precision=10, scale=2, nullable=true)
     */
    private $deudasol = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="deudadol", type="float", precision=10, scale=2, nullable=true)
     */
    private $deudadol = '0.00';

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
     * Set csede
     *
     * @param string $csede
     *
     * @return Cliente
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
     * Set xclien
     *
     * @param string $xclien
     *
     * @return Cliente
     */
    public function setXclien($xclien)
    {
        $this->xclien = $xclien;

        return $this;
    }

    /**
     * Get xclien
     *
     * @return string
     */
    public function getXclien()
    {
        return $this->xclien;
    }

    /**
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Cliente
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
     * Set cclien
     *
     * @param string $cclien
     *
     * @return Cliente
     */
    public function setCclien($cclien)
    {
        $this->cclien = $cclien;

        return $this;
    }

    /**
     * Get cclien
     *
     * @return string
     */
    public function getCclien()
    {
        return $this->cclien;
    }

    /**
     * Set razon
     *
     * @param string $razon
     *
     * @return Cliente
     */
    public function setRazon($razon)
    {
        $this->razon = $razon;

        return $this;
    }

    /**
     * Get razon
     *
     * @return string
     */
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * Set finicio
     *
     * @param \DateTime $finicio
     *
     * @return Cliente
     */
    public function setFinicio($finicio)
    {
        $this->finicio = $finicio;

        return $this;
    }

    /**
     * Get finicio
     *
     * @return \DateTime
     */
    public function getFinicio()
    {
        return $this->finicio;
    }

    /**
     * Set ffin
     *
     * @param \DateTime $ffin
     *
     * @return Cliente
     */
    public function setFfin($ffin)
    {
        $this->ffin = $ffin;

        return $this;
    }

    /**
     * Get ffin
     *
     * @return \DateTime
     */
    public function getFfin()
    {
        return $this->ffin;
    }

    /**
     * Set telef1
     *
     * @param string $telef1
     *
     * @return Cliente
     */
    public function setTelef1($telef1)
    {
        $this->telef1 = $telef1;

        return $this;
    }

    /**
     * Get telef1
     *
     * @return string
     */
    public function getTelef1()
    {
        return $this->telef1;
    }

    /**
     * Set telef2
     *
     * @param string $telef2
     *
     * @return Cliente
     */
    public function setTelef2($telef2)
    {
        $this->telef2 = $telef2;

        return $this;
    }

    /**
     * Get telef2
     *
     * @return string
     */
    public function getTelef2()
    {
        return $this->telef2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Cliente
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set direcc
     *
     * @param string $direcc
     *
     * @return Cliente
     */
    public function setDirecc($direcc)
    {
        $this->direcc = $direcc;

        return $this;
    }

    /**
     * Get direcc
     *
     * @return string
     */
    public function getDirecc()
    {
        return $this->direcc;
    }

    /**
     * Set codubica
     *
     * @param string $codubica
     *
     * @return Cliente
     */
    public function setCodubica($codubica)
    {
        $this->codubica = $codubica;

        return $this;
    }

    /**
     * Get codubica
     *
     * @return string
     */
    public function getCodubica()
    {
        return $this->codubica;
    }

    /**
     * Set limcred
     *
     * @param float $limcred
     *
     * @return Cliente
     */
    public function setLimcred($limcred)
    {
        $this->limcred = $limcred;

        return $this;
    }

    /**
     * Get limcred
     *
     * @return float
     */
    public function getLimcred()
    {
        return $this->limcred;
    }

    /**
     * Set ventas
     *
     * @param float $ventas
     *
     * @return Cliente
     */
    public function setVentas($ventas)
    {
        $this->ventas = $ventas;

        return $this;
    }

    /**
     * Get ventas
     *
     * @return float
     */
    public function getVentas()
    {
        return $this->ventas;
    }

    /**
     * Set categor
     *
     * @param string $categor
     *
     * @return Cliente
     */
    public function setCategor($categor)
    {
        $this->categor = $categor;

        return $this;
    }

    /**
     * Get categor
     *
     * @return string
     */
    public function getCategor()
    {
        return $this->categor;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pagweb
     *
     * @param string $pagweb
     *
     * @return Cliente
     */
    public function setPagweb($pagweb)
    {
        $this->pagweb = $pagweb;

        return $this;
    }

    /**
     * Get pagweb
     *
     * @return string
     */
    public function getPagweb()
    {
        return $this->pagweb;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Cliente
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set cumple
     *
     * @param \DateTime $cumple
     *
     * @return Cliente
     */
    public function setCumple($cumple)
    {
        $this->cumple = $cumple;

        return $this;
    }

    /**
     * Get cumple
     *
     * @return \DateTime
     */
    public function getCumple()
    {
        return $this->cumple;
    }

    /**
     * Set pagos
     *
     * @param float $pagos
     *
     * @return Cliente
     */
    public function setPagos($pagos)
    {
        $this->pagos = $pagos;

        return $this;
    }

    /**
     * Get pagos
     *
     * @return float
     */
    public function getPagos()
    {
        return $this->pagos;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Cliente
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
     * Set cgiro
     *
     * @param string $cgiro
     *
     * @return Cliente
     */
    public function setCgiro($cgiro)
    {
        $this->cgiro = $cgiro;

        return $this;
    }

    /**
     * Get cgiro
     *
     * @return string
     */
    public function getCgiro()
    {
        return $this->cgiro;
    }

    /**
     * Set deudasol
     *
     * @param float $deudasol
     *
     * @return Cliente
     */
    public function setDeudasol($deudasol)
    {
        $this->deudasol = $deudasol;

        return $this;
    }

    /**
     * Get deudasol
     *
     * @return float
     */
    public function getDeudasol()
    {
        return $this->deudasol;
    }

    /**
     * Set deudadol
     *
     * @param float $deudadol
     *
     * @return Cliente
     */
    public function setDeudadol($deudadol)
    {
        $this->deudadol = $deudadol;

        return $this;
    }

    /**
     * Get deudadol
     *
     * @return float
     */
    public function getDeudadol()
    {
        return $this->deudadol;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Cliente
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
