<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicageo
 *
 * @ORM\Table(name="ubicageo", indexes={@ORM\Index(name="codubica", columns={"codubica"})})
 * @ORM\Entity
 */
class Ubicageo
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
     * @ORM\Column(name="codubica", type="string", length=6, nullable=false)
     */
    private $codubica = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombredpto", type="string", length=15, nullable=true)
     */
    private $nombredpto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombreprov", type="string", length=20, nullable=true)
     */
    private $nombreprov;

    /**
     * @var string
     *
     * @ORM\Column(name="nombredist", type="string", length=25, nullable=true)
     */
    private $nombredist = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="c_region", type="string", length=3, nullable=true)
     */
    private $cRegion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="c_subreg", type="string", length=3, nullable=true)
     */
    private $cSubreg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cpostal", type="string", length=10, nullable=true)
     */
    private $cpostal = '0';



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
     * Set codubica
     *
     * @param string $codubica
     *
     * @return Ubicageo
     */
    public function setCodubica($codubica)
    {
        $this->codubica = $codubica;

        return $this;
    }

    /**
     * Get codubica
     *
     * @return string
     */
    public function getCodubica()
    {
        return $this->codubica;
    }

    /**
     * Set nombredpto
     *
     * @param string $nombredpto
     *
     * @return Ubicageo
     */
    public function setNombredpto($nombredpto)
    {
        $this->nombredpto = $nombredpto;

        return $this;
    }

    /**
     * Get nombredpto
     *
     * @return string
     */
    public function getNombredpto()
    {
        return $this->nombredpto;
    }

    /**
     * Set nombreprov
     *
     * @param string $nombreprov
     *
     * @return Ubicageo
     */
    public function setNombreprov($nombreprov)
    {
        $this->nombreprov = $nombreprov;

        return $this;
    }

    /**
     * Get nombreprov
     *
     * @return string
     */
    public function getNombreprov()
    {
        return $this->nombreprov;
    }

    /**
     * Set nombredist
     *
     * @param string $nombredist
     *
     * @return Ubicageo
     */
    public function setNombredist($nombredist)
    {
        $this->nombredist = $nombredist;

        return $this;
    }

    /**
     * Get nombredist
     *
     * @return string
     */
    public function getNombredist()
    {
        return $this->nombredist;
    }

    /**
     * Set cRegion
     *
     * @param string $cRegion
     *
     * @return Ubicageo
     */
    public function setCRegion($cRegion)
    {
        $this->cRegion = $cRegion;

        return $this;
    }

    /**
     * Get cRegion
     *
     * @return string
     */
    public function getCRegion()
    {
        return $this->cRegion;
    }

    /**
     * Set cSubreg
     *
     * @param string $cSubreg
     *
     * @return Ubicageo
     */
    public function setCSubreg($cSubreg)
    {
        $this->cSubreg = $cSubreg;

        return $this;
    }

    /**
     * Get cSubreg
     *
     * @return string
     */
    public function getCSubreg()
    {
        return $this->cSubreg;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Ubicageo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set cpostal
     *
     * @param string $cpostal
     *
     * @return Ubicageo
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }
}
