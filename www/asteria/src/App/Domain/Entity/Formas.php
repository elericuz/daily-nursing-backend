<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formas
 *
 * @ORM\Table(name="formas")
 * @ORM\Entity
 */
class Formas
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
     * @ORM\Column(name="forma", type="string", length=30, nullable=true)
     */
    private $forma = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="funcion", type="string", length=100, nullable=true)
     */
    private $funcion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creacion", type="date", nullable=true)
     */
    private $creacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



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
     * Set forma
     *
     * @param string $forma
     *
     * @return Formas
     */
    public function setForma($forma)
    {
        $this->forma = $forma;

        return $this;
    }

    /**
     * Get forma
     *
     * @return string
     */
    public function getForma()
    {
        return $this->forma;
    }

    /**
     * Set funcion
     *
     * @param string $funcion
     *
     * @return Formas
     */
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;

        return $this;
    }

    /**
     * Get funcion
     *
     * @return string
     */
    public function getFuncion()
    {
        return $this->funcion;
    }

    /**
     * Set creacion
     *
     * @param \DateTime $creacion
     *
     * @return Formas
     */
    public function setCreacion($creacion)
    {
        $this->creacion = $creacion;

        return $this;
    }

    /**
     * Get creacion
     *
     * @return \DateTime
     */
    public function getCreacion()
    {
        return $this->creacion;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Formas
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
}
