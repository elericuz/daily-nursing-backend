<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rangos
 *
 * @ORM\Table(name="rangos")
 * @ORM\Entity
 */
class Rangos
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
     * @ORM\Column(name="cnivel", type="string", length=2, nullable=true)
     */
    private $cnivel = '00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango1a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango1a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango1b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango1b = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango2a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango2a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango2b", type="float", precision=10, scale=3, nullable=true)
     */
    private $rango2b = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="rango3a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango3a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango3b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango3b = '0.00';



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
     * Set cnivel
     *
     * @param string $cnivel
     *
     * @return Rangos
     */
    public function setCnivel($cnivel)
    {
        $this->cnivel = $cnivel;

        return $this;
    }

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
     * Set rango1a
     *
     * @param float $rango1a
     *
     * @return Rangos
     */
    public function setRango1a($rango1a)
    {
        $this->rango1a = $rango1a;

        return $this;
    }

    /**
     * Get rango1a
     *
     * @return float
     */
    public function getRango1a()
    {
        return $this->rango1a;
    }

    /**
     * Set rango1b
     *
     * @param float $rango1b
     *
     * @return Rangos
     */
    public function setRango1b($rango1b)
    {
        $this->rango1b = $rango1b;

        return $this;
    }

    /**
     * Get rango1b
     *
     * @return float
     */
    public function getRango1b()
    {
        return $this->rango1b;
    }

    /**
     * Set rango2a
     *
     * @param float $rango2a
     *
     * @return Rangos
     */
    public function setRango2a($rango2a)
    {
        $this->rango2a = $rango2a;

        return $this;
    }

    /**
     * Get rango2a
     *
     * @return float
     */
    public function getRango2a()
    {
        return $this->rango2a;
    }

    /**
     * Set rango2b
     *
     * @param float $rango2b
     *
     * @return Rangos
     */
    public function setRango2b($rango2b)
    {
        $this->rango2b = $rango2b;

        return $this;
    }

    /**
     * Get rango2b
     *
     * @return float
     */
    public function getRango2b()
    {
        return $this->rango2b;
    }

    /**
     * Set rango3a
     *
     * @param float $rango3a
     *
     * @return Rangos
     */
    public function setRango3a($rango3a)
    {
        $this->rango3a = $rango3a;

        return $this;
    }

    /**
     * Get rango3a
     *
     * @return float
     */
    public function getRango3a()
    {
        return $this->rango3a;
    }

    /**
     * Set rango3b
     *
     * @param float $rango3b
     *
     * @return Rangos
     */
    public function setRango3b($rango3b)
    {
        $this->rango3b = $rango3b;

        return $this;
    }

    /**
     * Get rango3b
     *
     * @return float
     */
    public function getRango3b()
    {
        return $this->rango3b;
    }
}
