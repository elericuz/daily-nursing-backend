<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formdet
 *
 * @ORM\Table(name="formdet", indexes={@ORM\Index(name="cusuario", columns={"cusuario"})})
 * @ORM\Entity
 */
class Formdet
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
     * @ORM\Column(name="cusuario", type="string", length=10, nullable=true)
     */
    private $cusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="forma", type="string", length=30, nullable=true)
     */
    private $forma;

    /**
     * @var boolean
     *
     * @ORM\Column(name="acceso", type="boolean", nullable=true)
     */
    private $acceso = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="adi", type="boolean", nullable=true)
     */
    private $adi = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit", type="boolean", nullable=true)
     */
    private $edit = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="erase", type="boolean", nullable=true)
     */
    private $erase = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="reporte", type="boolean", nullable=true)
     */
    private $reporte = '1';



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
     * Set cusuario
     *
     * @param string $cusuario
     *
     * @return Formdet
     */
    public function setCusuario($cusuario)
    {
        $this->cusuario = $cusuario;

        return $this;
    }

    /**
     * Get cusuario
     *
     * @return string
     */
    public function getCusuario()
    {
        return $this->cusuario;
    }

    /**
     * Set forma
     *
     * @param string $forma
     *
     * @return Formdet
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
     * Set acceso
     *
     * @param boolean $acceso
     *
     * @return Formdet
     */
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return boolean
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Set adi
     *
     * @param boolean $adi
     *
     * @return Formdet
     */
    public function setAdi($adi)
    {
        $this->adi = $adi;

        return $this;
    }

    /**
     * Get adi
     *
     * @return boolean
     */
    public function getAdi()
    {
        return $this->adi;
    }

    /**
     * Set edit
     *
     * @param boolean $edit
     *
     * @return Formdet
     */
    public function setEdit($edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * Get edit
     *
     * @return boolean
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Set erase
     *
     * @param boolean $erase
     *
     * @return Formdet
     */
    public function setErase($erase)
    {
        $this->erase = $erase;

        return $this;
    }

    /**
     * Get erase
     *
     * @return boolean
     */
    public function getErase()
    {
        return $this->erase;
    }

    /**
     * Set reporte
     *
     * @param boolean $reporte
     *
     * @return Formdet
     */
    public function setReporte($reporte)
    {
        $this->reporte = $reporte;

        return $this;
    }

    /**
     * Get reporte
     *
     * @return boolean
     */
    public function getReporte()
    {
        return $this->reporte;
    }
}
