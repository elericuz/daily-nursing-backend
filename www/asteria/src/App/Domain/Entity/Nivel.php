<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nivel
 *
 * @ORM\Table(name="nivel")
 * @ORM\Entity
 */
class Nivel
{
    /**
     * @var string
     *
     * @ORM\Column(name="cnivel", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnivel = '00';

    /**
     * @var string
     *
     * @ORM\Column(name="xnivel", type="string", length=30, nullable=true)
     */
    private $xnivel;



    /**
     * Get cnivel
     *
     * @return string
     */
    public function getCnivel()
    {
        return $this->cnivel;
    }

    /**
     * Set xnivel
     *
     * @param string $xnivel
     *
     * @return Nivel
     */
    public function setXnivel($xnivel)
    {
        $this->xnivel = $xnivel;

        return $this;
    }

    /**
     * Get xnivel
     *
     * @return string
     */
    public function getXnivel()
    {
        return $this->xnivel;
    }
}
