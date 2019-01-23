<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="cempresa", columns={"cempresa", "xempresa", "casegura"})})
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="cempresa", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cempresa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xempresa", type="string", length=70, nullable=true)
     */
    private $xempresa;

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
     * @ORM\Column(name="casegura", type="string", length=4, nullable=true)
     */
    private $casegura;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=50, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="cargcont", type="string", length=50, nullable=true)
     */
    private $cargcont;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono;

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
     * Get cempresa
     *
     * @return string
     */
    public function getCempresa()
    {
        return $this->cempresa;
    }

    /**
     * Set xempresa
     *
     * @param string $xempresa
     *
     * @return Empresa
     */
    public function setXempresa($xempresa)
    {
        $this->xempresa = $xempresa;

        return $this;
    }

    /**
     * Get xempresa
     *
     * @return string
     */
    public function getXempresa()
    {
        return $this->xempresa;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * Set casegura
     *
     * @param string $casegura
     *
     * @return Empresa
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
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Empresa
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
     * Set cargcont
     *
     * @param string $cargcont
     *
     * @return Empresa
     */
    public function setCargcont($cargcont)
    {
        $this->cargcont = $cargcont;

        return $this;
    }

    /**
     * Get cargcont
     *
     * @return string
     */
    public function getCargcont()
    {
        return $this->cargcont;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empresa
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
     * Set email1
     *
     * @param string $email1
     *
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
