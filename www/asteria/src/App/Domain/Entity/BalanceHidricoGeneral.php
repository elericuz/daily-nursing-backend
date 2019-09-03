<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalanceHidricoGeneral
 *
 * @ORM\Table(name="balance_hidrico_general", indexes={@ORM\Index(name="balance_hidrico_general_paciente", columns={"id_paciente"})})
 * @ORM\Entity
 */
class BalanceHidricoGeneral
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
     * @ORM\Column(name="dieta", type="string", length=11, nullable=true)
     */
    private $dieta;

    /**
     * @var string
     *
     * @ORM\Column(name="volumen_total", type="string", length=11, nullable=true)
     */
    private $volumenTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="string", length=11, nullable=true)
     */
    private $peso;

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
     * @return BalanceHidricoGeneral
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
     * Set dieta
     *
     * @param string $dieta
     *
     * @return BalanceHidricoGeneral
     */
    public function setDieta($dieta)
    {
        $this->dieta = $dieta;

        return $this;
    }

    /**
     * Get dieta
     *
     * @return string
     */
    public function getDieta()
    {
        return $this->dieta;
    }

    /**
     * Set volumenTotal
     *
     * @param string $volumenTotal
     *
     * @return BalanceHidricoGeneral
     */
    public function setVolumenTotal($volumenTotal)
    {
        $this->volumenTotal = $volumenTotal;

        return $this;
    }

    /**
     * Get volumenTotal
     *
     * @return string
     */
    public function getVolumenTotal()
    {
        return $this->volumenTotal;
    }

    /**
     * Set peso
     *
     * @param string $peso
     *
     * @return BalanceHidricoGeneral
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set idPaciente
     *
     * @param \App\Domain\Entity\Paciente $idPaciente
     *
     * @return BalanceHidricoGeneral
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
}
