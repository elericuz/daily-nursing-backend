<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impuesto
 *
 * @ORM\Table(name="impuesto")
 * @ORM\Entity
 */
class Impuesto
{
    /**
     * @var string
     *
     * @ORM\Column(name="cimpues", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cimpues = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ximpues", type="string", length=45, nullable=true)
     */
    private $ximpues = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ximpues2", type="string", length=4, nullable=true)
     */
    private $ximpues2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=4, nullable=true)
     */
    private $valor;



    /**
     * Get cimpues
     *
     * @return string
     */
    public function getCimpues()
    {
        return $this->cimpues;
    }

    /**
     * Set ximpues
     *
     * @param string $ximpues
     *
     * @return Impuesto
     */
    public function setXimpues($ximpues)
    {
        $this->ximpues = $ximpues;

        return $this;
    }

    /**
     * Get ximpues
     *
     * @return string
     */
    public function getXimpues()
    {
        return $this->ximpues;
    }

    /**
     * Set ximpues2
     *
     * @param string $ximpues2
     *
     * @return Impuesto
     */
    public function setXimpues2($ximpues2)
    {
        $this->ximpues2 = $ximpues2;

        return $this;
    }

    /**
     * Get ximpues2
     *
     * @return string
     */
    public function getXimpues2()
    {
        return $this->ximpues2;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return Impuesto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }
}
