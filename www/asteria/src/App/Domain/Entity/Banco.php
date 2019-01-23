<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banco
 *
 * @ORM\Table(name="banco", indexes={@ORM\Index(name="cbanco", columns={"cbanco"})})
 * @ORM\Entity
 */
class Banco
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
     * @ORM\Column(name="cbanco", type="string", length=3, nullable=true)
     */
    private $cbanco = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xbanco", type="string", length=80, nullable=true)
     */
    private $xbanco = '0';



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
     * Set cbanco
     *
     * @param string $cbanco
     *
     * @return Banco
     */
    public function setCbanco($cbanco)
    {
        $this->cbanco = $cbanco;

        return $this;
    }

    /**
     * Get cbanco
     *
     * @return string
     */
    public function getCbanco()
    {
        return $this->cbanco;
    }

    /**
     * Set xbanco
     *
     * @param string $xbanco
     *
     * @return Banco
     */
    public function setXbanco($xbanco)
    {
        $this->xbanco = $xbanco;

        return $this;
    }

    /**
     * Get xbanco
     *
     * @return string
     */
    public function getXbanco()
    {
        return $this->xbanco;
    }
}
