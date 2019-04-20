<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicina
 *
 * @ORM\Table(name="medicina", indexes={@ORM\Index(name="medicina_via", columns={"id_via"}), @ORM\Index(name="medicina_paciente", columns={"id_paciente"})})
 * @ORM\Entity
 */
class Medicina
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
     * @ORM\Column(name="medicina", type="string", length=100, nullable=true)
     */
    private $medicina;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="string", length=20, nullable=true)
     */
    private $dosis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';

    /**
     * @var \App\Domain\Entity\Paciente
     *
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id")
     * })
     */
    private $idPaciente;

    /**
     * @var \App\Domain\Entity\MedicinaVia
     *
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\MedicinaVia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_via", referencedColumnName="id")
     * })
     */
    private $idVia;



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
     * Set medicina
     *
     * @param string $medicina
     *
     * @return Medicina
     */
    public function setMedicina($medicina)
    {
        $this->medicina = $medicina;

        return $this;
    }

    /**
     * Get medicina
     *
     * @return string
     */
    public function getMedicina()
    {
        return $this->medicina;
    }

    /**
     * Set dosis
     *
     * @param string $dosis
     *
     * @return Medicina
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;

        return $this;
    }

    /**
     * Get dosis
     *
     * @return string
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Medicina
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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Medicina
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idPaciente
     *
     * @param \App\Domain\Entity\Paciente $idPaciente
     *
     * @return Medicina
     */
    public function setIdPaciente(\App\Domain\Entity\Paciente $idPaciente = null)
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }

    /**
     * Get idPaciente
     *
     * @return \App\Domain\Entity\Paciente
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * Set idVia
     *
     * @param \App\Domain\Entity\MedicinaVia $idVia
     *
     * @return Medicina
     */
    public function setIdVia(\App\Domain\Entity\MedicinaVia $idVia = null)
    {
        $this->idVia = $idVia;

        return $this;
    }

    /**
     * Get idVia
     *
     * @return \App\Domain\Entity\MedicinaVia
     */
    public function getIdVia()
    {
        return $this->idVia;
    }
}
