<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AtencionPaciente
 *
 * @ORM\Table(name="atencion_paciente", indexes={@ORM\Index(name="ate_paciente", columns={"cpac"}), @ORM\Index(name="ate_pac_procedimiento", columns={"id_procedimiento"})})
 * @ORM\Entity
 */
class AtencionPaciente
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
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=5, nullable=false)
     */
    private $hora = '';

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=11, nullable=true)
     */
    private $valor;

    /**
     * @var \App\Domain\Entity\Procedimiento
     *
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\Procedimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_procedimiento", referencedColumnName="id")
     * })
     */
    private $idProcedimiento;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return AtencionPaciente
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
     * @param string $hora
     *
     * @return AtencionPaciente
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return AtencionPaciente
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set idProcedimiento
     *
     * @param \App\Domain\Entity\Procedimiento $idProcedimiento
     *
     * @return AtencionPaciente
     */
    public function setIdProcedimiento(\App\Domain\Entity\Procedimiento $idProcedimiento = null)
    {
        $this->idProcedimiento = $idProcedimiento;

        return $this;
    }

    /**
     * Get idProcedimiento
     *
     * @return \App\Domain\Entity\Procedimiento
     */
    public function getIdProcedimiento()
    {
        return $this->idProcedimiento;
    }

    /**
     * Set cpac
     *
     * @param \App\Domain\Entity\Paciente $cpac
     *
     * @return AtencionPaciente
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
