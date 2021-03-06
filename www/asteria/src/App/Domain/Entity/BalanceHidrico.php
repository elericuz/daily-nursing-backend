<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalanceHidrico
 *
 * @ORM\Table(name="balance_hidrico", indexes={@ORM\Index(name="tratamiento_balance_hidrico", columns={"id_tipo_tratamiento"}), @ORM\Index(name="paciente_balance_hidrico", columns={"id_paciente"})})
 * @ORM\Entity
 */
class BalanceHidrico
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
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=false)
     */
    private $cpac = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=8, nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=11, nullable=true)
     */
    private $valor;

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
     * @var \App\Domain\Entity\TipoTratamiento
     *
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\TipoTratamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_tratamiento", referencedColumnName="id")
     * })
     */
    private $idTipoTratamiento;



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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return BalanceHidrico
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cpac
     *
     * @param string $cpac
     *
     * @return BalanceHidrico
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
     * @return BalanceHidrico
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
     * @return BalanceHidrico
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
     * @return BalanceHidrico
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
     * Set idPaciente
     *
     * @param \App\Domain\Entity\Paciente $idPaciente
     *
     * @return BalanceHidrico
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
     * Set idTipoTratamiento
     *
     * @param \App\Domain\Entity\TipoTratamiento $idTipoTratamiento
     *
     * @return BalanceHidrico
     */
    public function setIdTipoTratamiento(\App\Domain\Entity\TipoTratamiento $idTipoTratamiento = null)
    {
        $this->idTipoTratamiento = $idTipoTratamiento;

        return $this;
    }

    /**
     * Get idTipoTratamiento
     *
     * @return \App\Domain\Entity\TipoTratamiento
     */
    public function getIdTipoTratamiento()
    {
        return $this->idTipoTratamiento;
    }
}
