<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asegura
 *
 * @ORM\Table(name="asegura", indexes={@ORM\Index(name="casegura", columns={"casegura", "xasegura"})})
 * @ORM\Entity
 */
class Asegura
{
    /**
     * @var string
     *
     * @ORM\Column(name="casegura", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $casegura = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xasegura", type="string", length=70, nullable=true)
     */
    private $xasegura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="igv", type="boolean", nullable=true)
     */
    private $igv;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=70, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="cdis", type="string", length=3, nullable=true)
     */
    private $cdis;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="atencion1", type="string", length=50, nullable=true)
     */
    private $atencion1;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo1", type="string", length=50, nullable=true)
     */
    private $cargo1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono1", type="string", length=10, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="email1", type="string", length=30, nullable=true)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="atencion2", type="string", length=50, nullable=true)
     */
    private $atencion2;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo2", type="string", length=50, nullable=true)
     */
    private $cargo2;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=10, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=30, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="creareg", type="string", length=30, nullable=false)
     */
    private $creareg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="modireg", type="string", length=30, nullable=false)
     */
    private $modireg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borrreg", type="string", length=30, nullable=false)
     */
    private $borrreg = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



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
     * Set xasegura
     *
     * @param string $xasegura
     *
     * @return Asegura
     */
    public function setXasegura($xasegura)
    {
        $this->xasegura = $xasegura;

        return $this;
    }

    /**
     * Get xasegura
     *
     * @return string
     */
    public function getXasegura()
    {
        return $this->xasegura;
    }

    /**
     * Set igv
     *
     * @param boolean $igv
     *
     * @return Asegura
     */
    public function setIgv($igv)
    {
        $this->igv = $igv;

        return $this;
    }

    /**
     * Get igv
     *
     * @return boolean
     */
    public function getIgv()
    {
        return $this->igv;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Asegura
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
     * Set cdis
     *
     * @param string $cdis
     *
     * @return Asegura
     */
    public function setCdis($cdis)
    {
        $this->cdis = $cdis;

        return $this;
    }

    /**
     * Get cdis
     *
     * @return string
     */
    public function getCdis()
    {
        return $this->cdis;
    }

    /**
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Asegura
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
     * Set atencion1
     *
     * @param string $atencion1
     *
     * @return Asegura
     */
    public function setAtencion1($atencion1)
    {
        $this->atencion1 = $atencion1;

        return $this;
    }

    /**
     * Get atencion1
     *
     * @return string
     */
    public function getAtencion1()
    {
        return $this->atencion1;
    }

    /**
     * Set cargo1
     *
     * @param string $cargo1
     *
     * @return Asegura
     */
    public function setCargo1($cargo1)
    {
        $this->cargo1 = $cargo1;

        return $this;
    }

    /**
     * Get cargo1
     *
     * @return string
     */
    public function getCargo1()
    {
        return $this->cargo1;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return Asegura
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set email1
     *
     * @param string $email1
     *
     * @return Asegura
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set atencion2
     *
     * @param string $atencion2
     *
     * @return Asegura
     */
    public function setAtencion2($atencion2)
    {
        $this->atencion2 = $atencion2;

        return $this;
    }

    /**
     * Get atencion2
     *
     * @return string
     */
    public function getAtencion2()
    {
        return $this->atencion2;
    }

    /**
     * Set cargo2
     *
     * @param string $cargo2
     *
     * @return Asegura
     */
    public function setCargo2($cargo2)
    {
        $this->cargo2 = $cargo2;

        return $this;
    }

    /**
     * Get cargo2
     *
     * @return string
     */
    public function getCargo2()
    {
        return $this->cargo2;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Asegura
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Asegura
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Asegura
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
     * @return Asegura
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
     * @return Asegura
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
     * @return Asegura
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
