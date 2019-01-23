<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubro
 *
 * @ORM\Table(name="rubro", indexes={@ORM\Index(name="crubro", columns={"crubro", "xrubro"})})
 * @ORM\Entity
 */
class Rubro
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
     * @ORM\Column(name="crubro", type="string", length=2, nullable=true)
     */
    private $crubro;

    /**
     * @var string
     *
     * @ORM\Column(name="xrubro", type="string", length=35, nullable=true)
     */
    private $xrubro;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set crubro
     *
     * @param string $crubro
     *
     * @return Rubro
     */
    public function setCrubro($crubro)
    {
        $this->crubro = $crubro;

        return $this;
    }

    /**
     * Get crubro
     *
     * @return string
     */
    public function getCrubro()
    {
        return $this->crubro;
    }

    /**
     * Set xrubro
     *
     * @param string $xrubro
     *
     * @return Rubro
     */
    public function setXrubro($xrubro)
    {
        $this->xrubro = $xrubro;

        return $this;
    }

    /**
     * Get xrubro
     *
     * @return string
     */
    public function getXrubro()
    {
        return $this->xrubro;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Rubro
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Rubro
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
     * @return Rubro
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
     * @return Rubro
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
     * @return Rubro
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
