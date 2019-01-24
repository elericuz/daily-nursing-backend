<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procedimiento
 *
 * @ORM\Table(name="procedimiento")
 * @ORM\Entity
 */
class Procedimiento
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
     * @ORM\Column(name="procedimiento", type="string", length=100, nullable=true)
     */
    private $procedimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado = '1';



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
     * Set procedimiento
     *
     * @param string $procedimiento
     *
     * @return Procedimiento
     */
    public function setProcedimiento($procedimiento)
    {
        $this->procedimiento = $procedimiento;

        return $this;
    }

    /**
     * Get procedimiento
     *
     * @return string
     */
    public function getProcedimiento()
    {
        return $this->procedimiento;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Procedimiento
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
}
