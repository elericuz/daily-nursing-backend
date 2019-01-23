<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Giro
 *
 * @ORM\Table(name="giro", indexes={@ORM\Index(name="cgiro", columns={"cgiro"})})
 * @ORM\Entity
 */
class Giro
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
     * @ORM\Column(name="cgiro", type="string", length=3, nullable=false)
     */
    private $cgiro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xgiro", type="string", length=50, nullable=true)
     */
    private $xgiro = '0';



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
     * Set cgiro
     *
     * @param string $cgiro
     *
     * @return Giro
     */
    public function setCgiro($cgiro)
    {
        $this->cgiro = $cgiro;

        return $this;
    }

    /**
     * Get cgiro
     *
     * @return string
     */
    public function getCgiro()
    {
        return $this->cgiro;
    }

    /**
     * Set xgiro
     *
     * @param string $xgiro
     *
     * @return Giro
     */
    public function setXgiro($xgiro)
    {
        $this->xgiro = $xgiro;

        return $this;
    }

    /**
     * Get xgiro
     *
     * @return string
     */
    public function getXgiro()
    {
        return $this->xgiro;
    }
}
