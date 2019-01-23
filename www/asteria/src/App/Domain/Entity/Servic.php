<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servic
 *
 * @ORM\Table(name="servic", indexes={@ORM\Index(name="cservic", columns={"cservic", "xservic"})})
 * @ORM\Entity
 */
class Servic
{
    /**
     * @var string
     *
     * @ORM\Column(name="cservic", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cservic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xservic", type="string", length=90, nullable=true)
     */
    private $xservic;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=9, scale=2, nullable=true)
     */
    private $precio;

    /**
     * @var integer
     *
     * @ORM\Column(name="opcion", type="integer", nullable=true)
     */
    private $opcion;

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
     * @ORM\Column(name="tipo", type="boolean", nullable=true)
     */
    private $tipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cod1", type="boolean", nullable=true)
     */
    private $cod1 = '1';



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
     * Set xservic
     *
     * @param string $xservic
     *
     * @return Servic
     */
    public function setXservic($xservic)
    {
        $this->xservic = $xservic;

        return $this;
    }

    /**
     * Get xservic
     *
     * @return string
     */
    public function getXservic()
    {
        return $this->xservic;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     *
     * @return Servic
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Servic
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set opcion
     *
     * @param integer $opcion
     *
     * @return Servic
     */
    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;

        return $this;
    }

    /**
     * Get opcion
     *
     * @return integer
     */
    public function getOpcion()
    {
        return $this->opcion;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Servic
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
     * @return Servic
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
     * @return Servic
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
     * @return Servic
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
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return Servic
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cod1
     *
     * @param boolean $cod1
     *
     * @return Servic
     */
    public function setCod1($cod1)
    {
        $this->cod1 = $cod1;

        return $this;
    }

    /**
     * Get cod1
     *
     * @return boolean
     */
    public function getCod1()
    {
        return $this->cod1;
    }
}
