<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveed
 *
 * @ORM\Table(name="proveed", indexes={@ORM\Index(name="cprov", columns={"cprov"})})
 * @ORM\Entity
 */
class Proveed
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
     * @ORM\Column(name="cprov", type="string", length=4, nullable=true)
     */
    private $cprov = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xprov", type="string", length=40, nullable=true)
     */
    private $xprov;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="direcc", type="string", length=45, nullable=true)
     */
    private $direcc;

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
     * @ORM\Column(name="contacto", type="string", length=40, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pagweb", type="string", length=40, nullable=true)
     */
    private $pagweb;

    /**
     * @var float
     *
     * @ORM\Column(name="compras", type="float", precision=10, scale=2, nullable=true)
     */
    private $compras;

    /**
     * @var float
     *
     * @ORM\Column(name="pagos", type="float", precision=10, scale=2, nullable=true)
     */
    private $pagos;

    /**
     * @var float
     *
     * @ORM\Column(name="diasaten", type="float", precision=6, scale=0, nullable=true)
     */
    private $diasaten;

    /**
     * @var string
     *
     * @ORM\Column(name="cubica", type="string", length=6, nullable=true)
     */
    private $cubica;

    /**
     * @var float
     *
     * @ORM\Column(name="deudasol", type="float", precision=10, scale=2, nullable=true)
     */
    private $deudasol;

    /**
     * @var float
     *
     * @ORM\Column(name="deudadol", type="float", precision=10, scale=2, nullable=true)
     */
    private $deudadol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="laborat", type="boolean", nullable=true)
     */
    private $laborat = '0';



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
     * Set cprov
     *
     * @param string $cprov
     *
     * @return Proveed
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

    /**
     * Set xprov
     *
     * @param string $xprov
     *
     * @return Proveed
     */
    public function setXprov($xprov)
    {
        $this->xprov = $xprov;

        return $this;
    }

    /**
     * Get xprov
     *
     * @return string
     */
    public function getXprov()
    {
        return $this->xprov;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Proveed
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
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Proveed
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
     * Set direcc
     *
     * @param string $direcc
     *
     * @return Proveed
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
     * Set telef1
     *
     * @param string $telef1
     *
     * @return Proveed
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
     * @return Proveed
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
     * @return Proveed
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
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Proveed
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
     * Set email
     *
     * @param string $email
     *
     * @return Proveed
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
     * @return Proveed
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
     * Set compras
     *
     * @param float $compras
     *
     * @return Proveed
     */
    public function setCompras($compras)
    {
        $this->compras = $compras;

        return $this;
    }

    /**
     * Get compras
     *
     * @return float
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * Set pagos
     *
     * @param float $pagos
     *
     * @return Proveed
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
     * Set diasaten
     *
     * @param float $diasaten
     *
     * @return Proveed
     */
    public function setDiasaten($diasaten)
    {
        $this->diasaten = $diasaten;

        return $this;
    }

    /**
     * Get diasaten
     *
     * @return float
     */
    public function getDiasaten()
    {
        return $this->diasaten;
    }

    /**
     * Set cubica
     *
     * @param string $cubica
     *
     * @return Proveed
     */
    public function setCubica($cubica)
    {
        $this->cubica = $cubica;

        return $this;
    }

    /**
     * Get cubica
     *
     * @return string
     */
    public function getCubica()
    {
        return $this->cubica;
    }

    /**
     * Set deudasol
     *
     * @param float $deudasol
     *
     * @return Proveed
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
     * @return Proveed
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
     * Set laborat
     *
     * @param boolean $laborat
     *
     * @return Proveed
     */
    public function setLaborat($laborat)
    {
        $this->laborat = $laborat;

        return $this;
    }

    /**
     * Get laborat
     *
     * @return boolean
     */
    public function getLaborat()
    {
        return $this->laborat;
    }
}
