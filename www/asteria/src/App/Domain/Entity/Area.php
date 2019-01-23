<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area", indexes={@ORM\Index(name="codarea", columns={"codarea"})})
 * @ORM\Entity
 */
class Area
{
    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $area = 'nn';

    /**
     * @var string
     *
     * @ORM\Column(name="codarea", type="string", length=2, nullable=true)
     */
    private $codarea = '0';



    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set codarea
     *
     * @param string $codarea
     *
     * @return Area
     */
    public function setCodarea($codarea)
    {
        $this->codarea = $codarea;

        return $this;
    }

    /**
     * Get codarea
     *
     * @return string
     */
    public function getCodarea()
    {
        return $this->codarea;
    }
}
