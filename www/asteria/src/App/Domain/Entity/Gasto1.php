<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gasto1
 *
 * @ORM\Table(name="gasto1")
 * @ORM\Entity
 */
class Gasto1
{
    /**
     * @var string
     *
     * @ORM\Column(name="cgasto", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cgasto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xgasto", type="string", length=40, nullable=true)
     */
    private $xgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="crubro", type="string", length=2, nullable=true)
     */
    private $crubro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



    /**
     * Get cgasto
     *
     * @return string
     */
    public function getCgasto()
    {
        return $this->cgasto;
    }

    /**
     * Set xgasto
     *
     * @param string $xgasto
     *
     * @return Gasto1
     */
    public function setXgasto($xgasto)
    {
        $this->xgasto = $xgasto;

        return $this;
    }

    /**
     * Get xgasto
     *
     * @return string
     */
    public function getXgasto()
    {
        return $this->xgasto;
    }

    /**
     * Set crubro
     *
     * @param string $crubro
     *
     * @return Gasto1
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
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Gasto1
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
