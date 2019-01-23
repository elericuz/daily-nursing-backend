<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario", uniqueConstraints={@ORM\UniqueConstraint(name="chora", columns={"chora"})})
 * @ORM\Entity
 */
class Horario
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
     * @ORM\Column(name="chora", type="string", length=2, nullable=true)
     */
    private $chora;

    /**
     * @var string
     *
     * @ORM\Column(name="xhora", type="string", length=16, nullable=true)
     */
    private $xhora;



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
     * Set chora
     *
     * @param string $chora
     *
     * @return Horario
     */
    public function setChora($chora)
    {
        $this->chora = $chora;

        return $this;
    }

    /**
     * Get chora
     *
     * @return string
     */
    public function getChora()
    {
        return $this->chora;
    }

    /**
     * Set xhora
     *
     * @param string $xhora
     *
     * @return Horario
     */
    public function setXhora($xhora)
    {
        $this->xhora = $xhora;

        return $this;
    }

    /**
     * Get xhora
     *
     * @return string
     */
    public function getXhora()
    {
        return $this->xhora;
    }
}
