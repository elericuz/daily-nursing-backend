<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarxaseg
 *
 * @ORM\Table(name="tarxaseg")
 * @ORM\Entity
 */
class Tarxaseg
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
     * @ORM\Column(name="casegura", type="string", length=4, nullable=false)
     */
    private $casegura = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer", nullable=true)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="cservic", type="string", length=6, nullable=false)
     */
    private $cservic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=1, nullable=true)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=12, scale=2, nullable=true)
     */
    private $precio;

    /**
     * @var integer
     *
     * @ORM\Column(name="aut", type="integer", nullable=true)
     */
    private $aut;

    /**
     * @var string
     *
     * @ORM\Column(name="creareg", type="string", length=30, nullable=true)
     */
    private $creareg;

    /**
     * @var string
     *
     * @ORM\Column(name="modireg", type="string", length=30, nullable=true)
     */
    private $modireg;

    /**
     * @var string
     *
     * @ORM\Column(name="borrreg", type="string", length=30, nullable=true)
     */
    private $borrreg;

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
     * Set casegura
     *
     * @param string $casegura
     *
     * @return Tarxaseg
     */
    public function setCasegura($casegura)
    {
        $this->casegura = $casegura;

        return $this;
    }

    /**
     * Get casegura
     *
     * @return string
     */
    public function getCasegura()
    {
        return $this->casegura;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return Tarxaseg
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set cservic
     *
     * @param string $cservic
     *
     * @return Tarxaseg
     */
    public function setCservic($cservic)
    {
        $this->cservic = $cservic;

        return $this;
    }

    /**
     * Get cservic
     *
     * @return string
     */
    public function getCservic()
    {
        return $this->cservic;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     *
     * @return Tarxaseg
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Tarxaseg
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set aut
     *
     * @param integer $aut
     *
     * @return Tarxaseg
     */
    public function setAut($aut)
    {
        $this->aut = $aut;

        return $this;
    }

    /**
     * Get aut
     *
     * @return integer
     */
    public function getAut()
    {
        return $this->aut;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Tarxaseg
     */
    public function setCreareg($creareg)
    {
        $this->creareg = $creareg;

        return $this;
    }

    /**
     * Get creareg
     *
     * @return string
     */
    public function getCreareg()
    {
        return $this->creareg;
    }

    /**
     * Set modireg
     *
     * @param string $modireg
     *
     * @return Tarxaseg
     */
    public function setModireg($modireg)
    {
        $this->modireg = $modireg;

        return $this;
    }

    /**
     * Get modireg
     *
     * @return string
     */
    public function getModireg()
    {
        return $this->modireg;
    }

    /**
     * Set borrreg
     *
     * @param string $borrreg
     *
     * @return Tarxaseg
     */
    public function setBorrreg($borrreg)
    {
        $this->borrreg = $borrreg;

        return $this;
    }

    /**
     * Get borrreg
     *
     * @return string
     */
    public function getBorrreg()
    {
        return $this->borrreg;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Tarxaseg
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
