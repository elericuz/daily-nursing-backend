<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forpago
 *
 * @ORM\Table(name="forpago")
 * @ORM\Entity
 */
class Forpago
{
    /**
     * @var string
     *
     * @ORM\Column(name="cpago", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpago = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xpago", type="string", length=40, nullable=true)
     */
    private $xpago;

    /**
     * @var float
     *
     * @ORM\Column(name="porcen", type="float", precision=10, scale=2, nullable=true)
     */
    private $porcen;



    /**
     * Get cpago
     *
     * @return string
     */
    public function getCpago()
    {
        return $this->cpago;
    }

    /**
     * Set xpago
     *
     * @param string $xpago
     *
     * @return Forpago
     */
    public function setXpago($xpago)
    {
        $this->xpago = $xpago;

        return $this;
    }

    /**
     * Get xpago
     *
     * @return string
     */
    public function getXpago()
    {
        return $this->xpago;
    }

    /**
     * Set porcen
     *
     * @param float $porcen
     *
     * @return Forpago
     */
    public function setPorcen($porcen)
    {
        $this->porcen = $porcen;

        return $this;
    }

    /**
     * Get porcen
     *
     * @return float
     */
    public function getPorcen()
    {
        return $this->porcen;
    }
}
