<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mcard1
 *
 * @ORM\Table(name="mcard1")
 * @ORM\Entity
 */
class Mcard1
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo = '0000000';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede = '000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date", nullable=true)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vence", type="date", nullable=true)
     */
    private $vence;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=60, nullable=true)
     */
    private $titular = 'x';

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="telef", type="string", length=10, nullable=true)
     */
    private $telef = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="direcc", type="string", length=60, nullable=true)
     */
    private $direcc = 'x';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edad", type="boolean", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="tippag", type="string", length=20, nullable=true)
     */
    private $tippag = 'x';



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
     * Set csede
     *
     * @param string $csede
     *
     * @return Mcard1
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
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return Mcard1
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set vence
     *
     * @param \DateTime $vence
     *
     * @return Mcard1
     */
    public function setVence($vence)
    {
        $this->vence = $vence;

        return $this;
    }

    /**
     * Get vence
     *
     * @return \DateTime
     */
    public function getVence()
    {
        return $this->vence;
    }

    /**
     * Set titular
     *
     * @param string $titular
     *
     * @return Mcard1
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Mcard1
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set telef
     *
     * @param string $telef
     *
     * @return Mcard1
     */
    public function setTelef($telef)
    {
        $this->telef = $telef;

        return $this;
    }

    /**
     * Get telef
     *
     * @return string
     */
    public function getTelef()
    {
        return $this->telef;
    }

    /**
     * Set direcc
     *
     * @param string $direcc
     *
     * @return Mcard1
     */
    public function setDirecc($direcc)
    {
        $this->direcc = $direcc;

        return $this;
    }

    /**
     * Get direcc
     *
     * @return string
     */
    public function getDirecc()
    {
        return $this->direcc;
    }

    /**
     * Set edad
     *
     * @param boolean $edad
     *
     * @return Mcard1
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return boolean
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set tippag
     *
     * @param string $tippag
     *
     * @return Mcard1
     */
    public function setTippag($tippag)
    {
        $this->tippag = $tippag;

        return $this;
    }

    /**
     * Get tippag
     *
     * @return string
     */
    public function getTippag()
    {
        return $this->tippag;
    }
}
