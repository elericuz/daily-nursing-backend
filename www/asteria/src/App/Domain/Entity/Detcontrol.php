<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detcontrol
 *
 * @ORM\Table(name="detcontrol", indexes={@ORM\Index(name="clave", columns={"clave", "cservic"})})
 * @ORM\Entity
 */
class Detcontrol
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
     * @var \DateTime
     *
     * @ORM\Column(name="termina", type="date", nullable=true)
     */
    private $termina;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presup", type="boolean", nullable=true)
     */
    private $presup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cortesia", type="boolean", nullable=true)
     */
    private $cortesia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nocub", type="boolean", nullable=true)
     */
    private $nocub;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="orden", type="string", length=2, nullable=true)
     */
    private $orden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="borra", type="boolean", nullable=true)
     */
    private $borra;



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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * @return Detcontrol
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
     * Set termina
     *
     * @param \DateTime $termina
     *
     * @return Detcontrol
     */
    public function setTermina($termina)
    {
        $this->termina = $termina;

        return $this;
    }

    /**
     * Get termina
     *
     * @return \DateTime
     */
    public function getTermina()
    {
        return $this->termina;
    }

    /**
     * Set presup
     *
     * @param boolean $presup
     *
     * @return Detcontrol
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
     * Set cortesia
     *
     * @param boolean $cortesia
     *
     * @return Detcontrol
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;

        return $this;
    }

    /**
     * Get cortesia
     *
     * @return boolean
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }

    /**
     * Set nocub
     *
     * @param boolean $nocub
     *
     * @return Detcontrol
     */
    public function setNocub($nocub)
    {
        $this->nocub = $nocub;

        return $this;
    }

    /**
     * Get nocub
     *
     * @return boolean
     */
    public function getNocub()
    {
        return $this->nocub;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Detcontrol
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
     * Set orden
     *
     * @param string $orden
     *
     * @return Detcontrol
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
     * Set borra
     *
     * @param boolean $borra
     *
     * @return Detcontrol
     */
    public function setBorra($borra)
    {
        $this->borra = $borra;

        return $this;
    }

    /**
     * Get borra
     *
     * @return boolean
     */
    public function getBorra()
    {
        return $this->borra;
    }
}
