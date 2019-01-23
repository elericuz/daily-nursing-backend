<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contable
 *
 * @ORM\Table(name="contable", indexes={@ORM\Index(name="fecha", columns={"fecha"})})
 * @ORM\Entity
 */
class Contable
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cusuario", type="string", length=10, nullable=true)
     */
    private $cusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var float
     *
     * @ORM\Column(name="ingresos", type="float", precision=10, scale=2, nullable=true)
     */
    private $ingresos;

    /**
     * @var float
     *
     * @ORM\Column(name="egresos", type="float", precision=10, scale=2, nullable=true)
     */
    private $egresos;

    /**
     * @var float
     *
     * @ORM\Column(name="resultado", type="float", precision=10, scale=2, nullable=true)
     */
    private $resultado = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=300, nullable=true)
     */
    private $observa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="corte", type="datetime", nullable=true)
     */
    private $corte;

    /**
     * @var float
     *
     * @ORM\Column(name="soles", type="float", precision=10, scale=2, nullable=true)
     */
    private $soles = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="dolares", type="float", precision=10, scale=2, nullable=true)
     */
    private $dolares = '0.00';



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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Contable
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

    /**
     * Set cusuario
     *
     * @param string $cusuario
     *
     * @return Contable
     */
    public function setCusuario($cusuario)
    {
        $this->cusuario = $cusuario;

        return $this;
    }

    /**
     * Get cusuario
     *
     * @return string
     */
    public function getCusuario()
    {
        return $this->cusuario;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Contable
     */
    public function setCsede($csede)
    {
        $this->csede = $csede;

        return $this;
    }

    /**
     * Get csede
     *
     * @return string
     */
    public function getCsede()
    {
        return $this->csede;
    }

    /**
     * Set ingresos
     *
     * @param float $ingresos
     *
     * @return Contable
     */
    public function setIngresos($ingresos)
    {
        $this->ingresos = $ingresos;

        return $this;
    }

    /**
     * Get ingresos
     *
     * @return float
     */
    public function getIngresos()
    {
        return $this->ingresos;
    }

    /**
     * Set egresos
     *
     * @param float $egresos
     *
     * @return Contable
     */
    public function setEgresos($egresos)
    {
        $this->egresos = $egresos;

        return $this;
    }

    /**
     * Get egresos
     *
     * @return float
     */
    public function getEgresos()
    {
        return $this->egresos;
    }

    /**
     * Set resultado
     *
     * @param float $resultado
     *
     * @return Contable
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return float
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Contable
     */
    public function setObserva($observa)
    {
        $this->observa = $observa;

        return $this;
    }

    /**
     * Get observa
     *
     * @return string
     */
    public function getObserva()
    {
        return $this->observa;
    }

    /**
     * Set corte
     *
     * @param \DateTime $corte
     *
     * @return Contable
     */
    public function setCorte($corte)
    {
        $this->corte = $corte;

        return $this;
    }

    /**
     * Get corte
     *
     * @return \DateTime
     */
    public function getCorte()
    {
        return $this->corte;
    }

    /**
     * Set soles
     *
     * @param float $soles
     *
     * @return Contable
     */
    public function setSoles($soles)
    {
        $this->soles = $soles;

        return $this;
    }

    /**
     * Get soles
     *
     * @return float
     */
    public function getSoles()
    {
        return $this->soles;
    }

    /**
     * Set dolares
     *
     * @param float $dolares
     *
     * @return Contable
     */
    public function setDolares($dolares)
    {
        $this->dolares = $dolares;

        return $this;
    }

    /**
     * Get dolares
     *
     * @return float
     */
    public function getDolares()
    {
        return $this->dolares;
    }
}
