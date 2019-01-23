<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unimed
 *
 * @ORM\Table(name="unimed")
 * @ORM\Entity
 */
class Unimed
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
     * @ORM\Column(name="cmedida", type="string", length=2, nullable=true)
     */
    private $cmedida;

    /**
     * @var string
     *
     * @ORM\Column(name="xmedida", type="string", length=40, nullable=true)
     */
    private $xmedida;

    /**
     * @var string
     *
     * @ORM\Column(name="xmedcorto", type="string", length=35, nullable=true)
     */
    private $xmedcorto;



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
     * Set cmedida
     *
     * @param string $cmedida
     *
     * @return Unimed
     */
    public function setCmedida($cmedida)
    {
        $this->cmedida = $cmedida;

        return $this;
    }

    /**
     * Get cmedida
     *
     * @return string
     */
    public function getCmedida()
    {
        return $this->cmedida;
    }

    /**
     * Set xmedida
     *
     * @param string $xmedida
     *
     * @return Unimed
     */
    public function setXmedida($xmedida)
    {
        $this->xmedida = $xmedida;

        return $this;
    }

    /**
     * Get xmedida
     *
     * @return string
     */
    public function getXmedida()
    {
        return $this->xmedida;
    }

    /**
     * Set xmedcorto
     *
     * @param string $xmedcorto
     *
     * @return Unimed
     */
    public function setXmedcorto($xmedcorto)
    {
        $this->xmedcorto = $xmedcorto;

        return $this;
    }

    /**
     * Get xmedcorto
     *
     * @return string
     */
    public function getXmedcorto()
    {
        return $this->xmedcorto;
    }
}
