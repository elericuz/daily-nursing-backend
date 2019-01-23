<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linea
 *
 * @ORM\Table(name="linea", indexes={@ORM\Index(name="clinea", columns={"clinea"})})
 * @ORM\Entity
 */
class Linea
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
     * @ORM\Column(name="clinea", type="string", length=3, nullable=true)
     */
    private $clinea;

    /**
     * @var string
     *
     * @ORM\Column(name="xlinea", type="string", length=40, nullable=true)
     */
    private $xlinea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="num", type="boolean", nullable=true)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="abrev", type="string", length=2, nullable=true)
     */
    private $abrev;



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
     * Set clinea
     *
     * @param string $clinea
     *
     * @return Linea
     */
    public function setClinea($clinea)
    {
        $this->clinea = $clinea;

        return $this;
    }

    /**
     * Get clinea
     *
     * @return string
     */
    public function getClinea()
    {
        return $this->clinea;
    }

    /**
     * Set xlinea
     *
     * @param string $xlinea
     *
     * @return Linea
     */
    public function setXlinea($xlinea)
    {
        $this->xlinea = $xlinea;

        return $this;
    }

    /**
     * Get xlinea
     *
     * @return string
     */
    public function getXlinea()
    {
        return $this->xlinea;
    }

    /**
     * Set num
     *
     * @param boolean $num
     *
     * @return Linea
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return boolean
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set abrev
     *
     * @param string $abrev
     *
     * @return Linea
     */
    public function setAbrev($abrev)
    {
        $this->abrev = $abrev;

        return $this;
    }

    /**
     * Get abrev
     *
     * @return string
     */
    public function getAbrev()
    {
        return $this->abrev;
    }
}
