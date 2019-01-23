<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hallazgos
 *
 * @ORM\Table(name="hallazgos", indexes={@ORM\Index(name="challa", columns={"challa", "xhalla"})})
 * @ORM\Entity
 */
class Hallazgos
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
     * @ORM\Column(name="challa", type="string", length=2, nullable=true)
     */
    private $challa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xhalla", type="string", length=50, nullable=true)
     */
    private $xhalla;

    /**
     * @var string
     *
     * @ORM\Column(name="abrevia", type="string", length=3, nullable=true)
     */
    private $abrevia;

    /**
     * @var string
     *
     * @ORM\Column(name="creareg", type="string", length=40, nullable=true)
     */
    private $creareg;

    /**
     * @var string
     *
     * @ORM\Column(name="modireg", type="string", length=40, nullable=true)
     */
    private $modireg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ubica", type="boolean", nullable=true)
     */
    private $ubica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rango", type="boolean", nullable=true)
     */
    private $rango;



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
     * Set challa
     *
     * @param string $challa
     *
     * @return Hallazgos
     */
    public function setChalla($challa)
    {
        $this->challa = $challa;

        return $this;
    }

    /**
     * Get challa
     *
     * @return string
     */
    public function getChalla()
    {
        return $this->challa;
    }

    /**
     * Set xhalla
     *
     * @param string $xhalla
     *
     * @return Hallazgos
     */
    public function setXhalla($xhalla)
    {
        $this->xhalla = $xhalla;

        return $this;
    }

    /**
     * Get xhalla
     *
     * @return string
     */
    public function getXhalla()
    {
        return $this->xhalla;
    }

    /**
     * Set abrevia
     *
     * @param string $abrevia
     *
     * @return Hallazgos
     */
    public function setAbrevia($abrevia)
    {
        $this->abrevia = $abrevia;

        return $this;
    }

    /**
     * Get abrevia
     *
     * @return string
     */
    public function getAbrevia()
    {
        return $this->abrevia;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Hallazgos
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
     * @return Hallazgos
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
     * Set ubica
     *
     * @param boolean $ubica
     *
     * @return Hallazgos
     */
    public function setUbica($ubica)
    {
        $this->ubica = $ubica;

        return $this;
    }

    /**
     * Get ubica
     *
     * @return boolean
     */
    public function getUbica()
    {
        return $this->ubica;
    }

    /**
     * Set rango
     *
     * @param boolean $rango
     *
     * @return Hallazgos
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        return $this;
    }

    /**
     * Get rango
     *
     * @return boolean
     */
    public function getRango()
    {
        return $this->rango;
    }
}
