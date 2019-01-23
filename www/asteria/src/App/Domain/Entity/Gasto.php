<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gasto
 *
 * @ORM\Table(name="gasto")
 * @ORM\Entity
 */
class Gasto
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
     * @ORM\Column(name="cgasto", type="string", length=3, nullable=true)
     */
    private $cgasto;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cgasto
     *
     * @param string $cgasto
     *
     * @return Gasto
     */
    public function setCgasto($cgasto)
    {
        $this->cgasto = $cgasto;

        return $this;
    }

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
     * @return Gasto
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
     * @return Gasto
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
     * @return Gasto
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
