<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalanceHidricoTotal
 *
 * @ORM\Table(name="balance_hidrico_total", indexes={@ORM\Index(name="balance_hidrico_total_paciente", columns={"id_paciente"})})
 * @ORM\Entity
 */
class BalanceHidricoTotal
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
     * @ORM\Column(name="subtotal", type="integer", nullable=true)
     */
    private $subtotal = '1';

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
     * @ORM\Column(name="total", type="string", length=11, nullable=true)
     */
    private $total;

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
     * Set subtotal
     *
     * @param integer $subtotal
     *
     * @return BalanceHidricoTotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return integer
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return BalanceHidricoTotal
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
     * @return BalanceHidricoTotal
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
     * Set total
     *
     * @param string $total
     *
     * @return BalanceHidricoTotal
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set idPaciente
     *
     * @param \App\Domain\Entity\Paciente $idPaciente
     *
     * @return BalanceHidricoTotal
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
