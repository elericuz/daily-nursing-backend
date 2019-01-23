<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObservacionAtencionPaciente
 *
 * @ORM\Table(name="observacion_atencion_paciente", indexes={@ORM\Index(name="observacion_paciente", columns={"cpac"})})
 * @ORM\Entity
 */
class ObservacionAtencionPaciente
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
     * @var integer
     *
     * @ORM\Column(name="turno", type="integer", nullable=false)
     */
    private $turno;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="datetime", nullable=true)
     */
    private $hora;

    /**
     * @var \App\Domain\Entity\Paciente
     *
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpac", referencedColumnName="cpac")
     * })
     */
    private $cpac;



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
     * Set turno
     *
     * @param integer $turno
     *
     * @return ObservacionAtencionPaciente
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return integer
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return ObservacionAtencionPaciente
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return ObservacionAtencionPaciente
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
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return ObservacionAtencionPaciente
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set cpac
     *
     * @param \App\Domain\Entity\Paciente $cpac
     *
     * @return ObservacionAtencionPaciente
     */
    public function setCpac(\App\Domain\Entity\Paciente $cpac = null)
    {
        $this->cpac = $cpac;

        return $this;
    }

    /**
     * Get cpac
     *
     * @return \App\Domain\Entity\Paciente
     */
    public function getCpac()
    {
        return $this->cpac;
    }
}
