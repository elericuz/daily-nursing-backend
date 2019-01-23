<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atencion
 *
 * @ORM\Table(name="atencion", indexes={@ORM\Index(name="clave", columns={"clave", "cpac"})})
 * @ORM\Entity
 */
class Atencion
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
     * @ORM\Column(name="clave", type="string", length=7, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="progreso", type="text", length=65535, nullable=true)
     */
    private $progreso;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=true)
     */
    private $cpac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="casiste", type="string", length=2, nullable=true)
     */
    private $casiste;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=240, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="refer", type="string", length=80, nullable=true)
     */
    private $refer;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

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
     * @var string
     *
     * @ORM\Column(name="unico", type="string", length=29, nullable=true)
     */
    private $unico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="par", type="boolean", nullable=true)
     */
    private $par = '0';



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
     * Set clave
     *
     * @param string $clave
     *
     * @return Atencion
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set progreso
     *
     * @param string $progreso
     *
     * @return Atencion
     */
    public function setProgreso($progreso)
    {
        $this->progreso = $progreso;

        return $this;
    }

    /**
     * Get progreso
     *
     * @return string
     */
    public function getProgreso()
    {
        return $this->progreso;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Atencion
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
     * Set cpac
     *
     * @param string $cpac
     *
     * @return Atencion
     */
    public function setCpac($cpac)
    {
        $this->cpac = $cpac;

        return $this;
    }

    /**
     * Get cpac
     *
     * @return string
     */
    public function getCpac()
    {
        return $this->cpac;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Atencion
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
     * Set casiste
     *
     * @param string $casiste
     *
     * @return Atencion
     */
    public function setCasiste($casiste)
    {
        $this->casiste = $casiste;

        return $this;
    }

    /**
     * Get casiste
     *
     * @return string
     */
    public function getCasiste()
    {
        return $this->casiste;
    }

    /**
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Atencion
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
     * Set observa
     *
     * @param string $observa
     *
     * @return Atencion
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
     * Set refer
     *
     * @param string $refer
     *
     * @return Atencion
     */
    public function setRefer($refer)
    {
        $this->refer = $refer;

        return $this;
    }

    /**
     * Get refer
     *
     * @return string
     */
    public function getRefer()
    {
        return $this->refer;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Atencion
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
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Atencion
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
     * @return Atencion
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
     * @return Atencion
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
     * @return Atencion
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

    /**
     * Set unico
     *
     * @param string $unico
     *
     * @return Atencion
     */
    public function setUnico($unico)
    {
        $this->unico = $unico;

        return $this;
    }

    /**
     * Get unico
     *
     * @return string
     */
    public function getUnico()
    {
        return $this->unico;
    }

    /**
     * Set par
     *
     * @param boolean $par
     *
     * @return Atencion
     */
    public function setPar($par)
    {
        $this->par = $par;

        return $this;
    }

    /**
     * Get par
     *
     * @return boolean
     */
    public function getPar()
    {
        return $this->par;
    }
}
