<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais", indexes={@ORM\Index(name="cpais", columns={"cpais"})})
 * @ORM\Entity
 */
class Pais
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
     * @ORM\Column(name="cpais", type="string", length=3, nullable=true)
     */
    private $cpais = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xpais", type="string", length=40, nullable=true)
     */
    private $xpais = '0';



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
     * Set cpais
     *
     * @param string $cpais
     *
     * @return Pais
     */
    public function setCpais($cpais)
    {
        $this->cpais = $cpais;

        return $this;
    }

    /**
     * Get cpais
     *
     * @return string
     */
    public function getCpais()
    {
        return $this->cpais;
    }

    /**
     * Set xpais
     *
     * @param string $xpais
     *
     * @return Pais
     */
    public function setXpais($xpais)
    {
        $this->xpais = $xpais;

        return $this;
    }

    /**
     * Get xpais
     *
     * @return string
     */
    public function getXpais()
    {
        return $this->xpais;
    }
}
