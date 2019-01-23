<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mcard2
 *
 * @ORM\Table(name="mcard2", indexes={@ORM\Index(name="codigo", columns={"codigo"})})
 * @ORM\Entity
 */
class Mcard2
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
     * @ORM\Column(name="codigo", type="string", length=6, nullable=true)
     */
    private $codigo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="depen", type="string", length=60, nullable=true)
     */
    private $depen = 'x';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edad", type="boolean", nullable=true)
     */
    private $edad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=20, nullable=true)
     */
    private $parent = '0';



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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Mcard2
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set depen
     *
     * @param string $depen
     *
     * @return Mcard2
     */
    public function setDepen($depen)
    {
        $this->depen = $depen;

        return $this;
    }

    /**
     * Get depen
     *
     * @return string
     */
    public function getDepen()
    {
        return $this->depen;
    }

    /**
     * Set edad
     *
     * @param boolean $edad
     *
     * @return Mcard2
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return boolean
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set parent
     *
     * @param string $parent
     *
     * @return Mcard2
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
}
