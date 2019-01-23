<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nivel2
 *
 * @ORM\Table(name="nivel2")
 * @ORM\Entity
 */
class Nivel2
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
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico = '000';

    /**
     * @var string
     *
     * @ORM\Column(name="cnivel", type="string", length=2, nullable=true)
     */
    private $cnivel = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="valor", type="boolean", nullable=true)
     */
    private $valor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;



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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Nivel2
     */
    public function setCmedico($cmedico)
    {
        $this->cmedico = $cmedico;

        return $this;
    }

    /**
     * Get cmedico
     *
     * @return string
     */
    public function getCmedico()
    {
        return $this->cmedico;
    }

    /**
     * Set cnivel
     *
     * @param string $cnivel
     *
     * @return Nivel2
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
     * Set valor
     *
     * @param boolean $valor
     *
     * @return Nivel2
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return boolean
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Nivel2
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
