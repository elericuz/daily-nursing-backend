<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ambiente
 *
 * @ORM\Table(name="ambiente", indexes={@ORM\Index(name="camb", columns={"camb"})})
 * @ORM\Entity
 */
class Ambiente
{
    /**
     * @var string
     *
     * @ORM\Column(name="camb", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $camb = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xamb", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $xamb = '';



    /**
     * Set camb
     *
     * @param string $camb
     *
     * @return Ambiente
     */
    public function setCamb($camb)
    {
        $this->camb = $camb;

        return $this;
    }

    /**
     * Get camb
     *
     * @return string
     */
    public function getCamb()
    {
        return $this->camb;
    }

    /**
     * Set xamb
     *
     * @param string $xamb
     *
     * @return Ambiente
     */
    public function setXamb($xamb)
    {
        $this->xamb = $xamb;

        return $this;
    }

    /**
     * Get xamb
     *
     * @return string
     */
    public function getXamb()
    {
        return $this->xamb;
    }
}
