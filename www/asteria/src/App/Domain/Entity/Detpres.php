<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detpres
 *
 * @ORM\Table(name="detpres", indexes={@ORM\Index(name="clave", columns={"clave", "cservic"})})
 * @ORM\Entity
 */
class Detpres
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
     * @ORM\Column(name="clave", type="string", length=7, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="cservic", type="string", length=6, nullable=true)
     */
    private $cservic;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precunit", type="float", precision=10, scale=2, nullable=true)
     */
    private $precunit;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

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
     * @var integer
     *
     * @ORM\Column(name="cortesia", type="integer", nullable=true)
     */
    private $cortesia;

    /**
     * @var integer
     *
     * @ORM\Column(name="nocub", type="integer", nullable=true)
     */
    private $nocub;

    /**
     * @var string
     *
     * @ORM\Column(name="orden", type="string", length=2, nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda;



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
     * Set clave
     *
     * @param string $clave
     *
     * @return Detpres
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
     * Set cservic
     *
     * @param string $cservic
     *
     * @return Detpres
     */
    public function setCservic($cservic)
    {
        $this->cservic = $cservic;

        return $this;
    }

    /**
     * Get cservic
     *
     * @return string
     */
    public function getCservic()
    {
        return $this->cservic;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Detpres
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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Detpres
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precunit
     *
     * @param float $precunit
     *
     * @return Detpres
     */
    public function setPrecunit($precunit)
    {
        $this->precunit = $precunit;

        return $this;
    }

    /**
     * Get precunit
     *
     * @return float
     */
    public function getPrecunit()
    {
        return $this->precunit;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Detpres
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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Detpres
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Detpres
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
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Detpres
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
     * @return Detpres
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
     * @return Detpres
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
     * @return Detpres
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
     * Set cortesia
     *
     * @param integer $cortesia
     *
     * @return Detpres
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return integer
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set nocub
     *
     * @param integer $nocub
     *
     * @return Detpres
     */
    public function setNocub($nocub)
    {
        $this->nocub = $nocub;

        return $this;
    }

    /**
     * Get nocub
     *
     * @return integer
     */
    public function getNocub()
    {
        return $this->nocub;
    }

    /**
     * Set orden
     *
     * @param string $orden
     *
     * @return Detpres
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return string
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Detpres
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
}
