<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cancela
 *
 * @ORM\Table(name="cancela")
 * @ORM\Entity
 */
class Cancela
{
    /**
     * @var string
     *
     * @ORM\Column(name="cdocum", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdocum;

    /**
     * @var string
     *
     * @ORM\Column(name="ndocum", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ndocum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=10, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="crelacio", type="string", length=3, nullable=true)
     */
    private $crelacio;

    /**
     * @var string
     *
     * @ORM\Column(name="nrelacio", type="string", length=10, nullable=true)
     */
    private $nrelacio;



    /**
     * Set cdocum
     *
     * @param string $cdocum
     *
     * @return Cancela
     */
    public function setCdocum($cdocum)
    {
        $this->cdocum = $cdocum;

        return $this;
    }

    /**
     * Get cdocum
     *
     * @return string
     */
    public function getCdocum()
    {
        return $this->cdocum;
    }

    /**
     * Set ndocum
     *
     * @param string $ndocum
     *
     * @return Cancela
     */
    public function setNdocum($ndocum)
    {
        $this->ndocum = $ndocum;

        return $this;
    }

    /**
     * Get ndocum
     *
     * @return string
     */
    public function getNdocum()
    {
        return $this->ndocum;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Cancela
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Cancela
     */
    public function setCsede($csede)
    {
        $this->csede = $csede;

        return $this;
    }

    /**
     * Get csede
     *
     * @return string
     */
    public function getCsede()
    {
        return $this->csede;
    }

    /**
     * Set crelacio
     *
     * @param string $crelacio
     *
     * @return Cancela
     */
    public function setCrelacio($crelacio)
    {
        $this->crelacio = $crelacio;

        return $this;
    }

    /**
     * Get crelacio
     *
     * @return string
     */
    public function getCrelacio()
    {
        return $this->crelacio;
    }

    /**
     * Set nrelacio
     *
     * @param string $nrelacio
     *
     * @return Cancela
     */
    public function setNrelacio($nrelacio)
    {
        $this->nrelacio = $nrelacio;

        return $this;
    }

    /**
     * Get nrelacio
     *
     * @return string
     */
    public function getNrelacio()
    {
        return $this->nrelacio;
    }
}
