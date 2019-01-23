<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consolida
 *
 * @ORM\Table(name="consolida")
 * @ORM\Entity
 */
class Consolida
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=true)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="sol", type="float", precision=10, scale=2, nullable=true)
     */
    private $sol;

    /**
     * @var float
     *
     * @ORM\Column(name="dol", type="float", precision=10, scale=2, nullable=true)
     */
    private $dol;

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=7, scale=3, nullable=true)
     */
    private $tipcam;

    /**
     * @var float
     *
     * @ORM\Column(name="totdol", type="float", precision=10, scale=2, nullable=true)
     */
    private $totdol;



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Consolida
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Consolida
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Consolida
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set sol
     *
     * @param float $sol
     *
     * @return Consolida
     */
    public function setSol($sol)
    {
        $this->sol = $sol;

        return $this;
    }

    /**
     * Get sol
     *
     * @return float
     */
    public function getSol()
    {
        return $this->sol;
    }

    /**
     * Set dol
     *
     * @param float $dol
     *
     * @return Consolida
     */
    public function setDol($dol)
    {
        $this->dol = $dol;

        return $this;
    }

    /**
     * Get dol
     *
     * @return float
     */
    public function getDol()
    {
        return $this->dol;
    }

    /**
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Consolida
     */
    public function setTipcam($tipcam)
    {
        $this->tipcam = $tipcam;

        return $this;
    }

    /**
     * Get tipcam
     *
     * @return float
     */
    public function getTipcam()
    {
        return $this->tipcam;
    }

    /**
     * Set totdol
     *
     * @param float $totdol
     *
     * @return Consolida
     */
    public function setTotdol($totdol)
    {
        $this->totdol = $totdol;

        return $this;
    }

    /**
     * Get totdol
     *
     * @return float
     */
    public function getTotdol()
    {
        return $this->totdol;
    }
}
