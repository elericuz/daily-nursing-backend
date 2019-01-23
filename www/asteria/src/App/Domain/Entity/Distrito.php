<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distrito
 *
 * @ORM\Table(name="distrito", indexes={@ORM\Index(name="cdistrito", columns={"cdistrito"})})
 * @ORM\Entity
 */
class Distrito
{
    /**
     * @var string
     *
     * @ORM\Column(name="cdistrito", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdistrito = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xdistrito", type="string", length=45, nullable=true)
     */
    private $xdistrito = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cdepa", type="string", length=3, nullable=true)
     */
    private $cdepa;



    /**
     * Get cdistrito
     *
     * @return string
     */
    public function getCdistrito()
    {
        return $this->cdistrito;
    }

    /**
     * Set xdistrito
     *
     * @param string $xdistrito
     *
     * @return Distrito
     */
    public function setXdistrito($xdistrito)
    {
        $this->xdistrito = $xdistrito;

        return $this;
    }

    /**
     * Get xdistrito
     *
     * @return string
     */
    public function getXdistrito()
    {
        return $this->xdistrito;
    }

    /**
     * Set cdepa
     *
     * @param string $cdepa
     *
     * @return Distrito
     */
    public function setCdepa($cdepa)
    {
        $this->cdepa = $cdepa;

        return $this;
    }

    /**
     * Get cdepa
     *
     * @return string
     */
    public function getCdepa()
    {
        return $this->cdepa;
    }
}
