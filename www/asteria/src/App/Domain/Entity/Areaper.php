<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areaper
 *
 * @ORM\Table(name="areaper", indexes={@ORM\Index(name="carea", columns={"carea", "xarea"})})
 * @ORM\Entity
 */
class Areaper
{
    /**
     * @var string
     *
     * @ORM\Column(name="carea", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $carea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xarea", type="string", length=40, nullable=true)
     */
    private $xarea;

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
    private $actualiza = '0000-00-00';



    /**
     * Get carea
     *
     * @return string
     */
    public function getCarea()
    {
        return $this->carea;
    }

    /**
     * Set xarea
     *
     * @param string $xarea
     *
     * @return Areaper
     */
    public function setXarea($xarea)
    {
        $this->xarea = $xarea;

        return $this;
    }

    /**
     * Get xarea
     *
     * @return string
     */
    public function getXarea()
    {
        return $this->xarea;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Areaper
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
     * @return Areaper
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
     * @return Areaper
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
     * @return Areaper
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
