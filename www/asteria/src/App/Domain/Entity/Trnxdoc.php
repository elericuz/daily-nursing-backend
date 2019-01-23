<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trnxdoc
 *
 * @ORM\Table(name="trnxdoc")
 * @ORM\Entity
 */
class Trnxdoc
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
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha1", type="date", nullable=true)
     */
    private $fecha1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha2", type="date", nullable=true)
     */
    private $fecha2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ln1", type="boolean", nullable=true)
     */
    private $ln1 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ln2", type="boolean", nullable=true)
     */
    private $ln2 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mr1", type="boolean", nullable=true)
     */
    private $mr1 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mr2", type="boolean", nullable=true)
     */
    private $mr2 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mi1", type="boolean", nullable=true)
     */
    private $mi1 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mi2", type="boolean", nullable=true)
     */
    private $mi2 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="jv1", type="boolean", nullable=true)
     */
    private $jv1 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="jv2", type="boolean", nullable=true)
     */
    private $jv2 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="vr1", type="boolean", nullable=true)
     */
    private $vr1 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="vr2", type="boolean", nullable=true)
     */
    private $vr2 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sb1", type="boolean", nullable=true)
     */
    private $sb1 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sb2", type="boolean", nullable=true)
     */
    private $sb2 = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="horas", type="float", precision=3, scale=0, nullable=true)
     */
    private $horas = '1';



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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Trnxdoc
     */
    public function setCmedico($cmedico)
    {
        $this->cmedico = $cmedico;

        return $this;
    }

    /**
     * Get cmedico
     *
     * @return string
     */
    public function getCmedico()
    {
        return $this->cmedico;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Trnxdoc
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
     * Set fecha1
     *
     * @param \DateTime $fecha1
     *
     * @return Trnxdoc
     */
    public function setFecha1($fecha1)
    {
        $this->fecha1 = $fecha1;

        return $this;
    }

    /**
     * Get fecha1
     *
     * @return \DateTime
     */
    public function getFecha1()
    {
        return $this->fecha1;
    }

    /**
     * Set fecha2
     *
     * @param \DateTime $fecha2
     *
     * @return Trnxdoc
     */
    public function setFecha2($fecha2)
    {
        $this->fecha2 = $fecha2;

        return $this;
    }

    /**
     * Get fecha2
     *
     * @return \DateTime
     */
    public function getFecha2()
    {
        return $this->fecha2;
    }

    /**
     * Set ln1
     *
     * @param boolean $ln1
     *
     * @return Trnxdoc
     */
    public function setLn1($ln1)
    {
        $this->ln1 = $ln1;

        return $this;
    }

    /**
     * Get ln1
     *
     * @return boolean
     */
    public function getLn1()
    {
        return $this->ln1;
    }

    /**
     * Set ln2
     *
     * @param boolean $ln2
     *
     * @return Trnxdoc
     */
    public function setLn2($ln2)
    {
        $this->ln2 = $ln2;

        return $this;
    }

    /**
     * Get ln2
     *
     * @return boolean
     */
    public function getLn2()
    {
        return $this->ln2;
    }

    /**
     * Set mr1
     *
     * @param boolean $mr1
     *
     * @return Trnxdoc
     */
    public function setMr1($mr1)
    {
        $this->mr1 = $mr1;

        return $this;
    }

    /**
     * Get mr1
     *
     * @return boolean
     */
    public function getMr1()
    {
        return $this->mr1;
    }

    /**
     * Set mr2
     *
     * @param boolean $mr2
     *
     * @return Trnxdoc
     */
    public function setMr2($mr2)
    {
        $this->mr2 = $mr2;

        return $this;
    }

    /**
     * Get mr2
     *
     * @return boolean
     */
    public function getMr2()
    {
        return $this->mr2;
    }

    /**
     * Set mi1
     *
     * @param boolean $mi1
     *
     * @return Trnxdoc
     */
    public function setMi1($mi1)
    {
        $this->mi1 = $mi1;

        return $this;
    }

    /**
     * Get mi1
     *
     * @return boolean
     */
    public function getMi1()
    {
        return $this->mi1;
    }

    /**
     * Set mi2
     *
     * @param boolean $mi2
     *
     * @return Trnxdoc
     */
    public function setMi2($mi2)
    {
        $this->mi2 = $mi2;

        return $this;
    }

    /**
     * Get mi2
     *
     * @return boolean
     */
    public function getMi2()
    {
        return $this->mi2;
    }

    /**
     * Set jv1
     *
     * @param boolean $jv1
     *
     * @return Trnxdoc
     */
    public function setJv1($jv1)
    {
        $this->jv1 = $jv1;

        return $this;
    }

    /**
     * Get jv1
     *
     * @return boolean
     */
    public function getJv1()
    {
        return $this->jv1;
    }

    /**
     * Set jv2
     *
     * @param boolean $jv2
     *
     * @return Trnxdoc
     */
    public function setJv2($jv2)
    {
        $this->jv2 = $jv2;

        return $this;
    }

    /**
     * Get jv2
     *
     * @return boolean
     */
    public function getJv2()
    {
        return $this->jv2;
    }

    /**
     * Set vr1
     *
     * @param boolean $vr1
     *
     * @return Trnxdoc
     */
    public function setVr1($vr1)
    {
        $this->vr1 = $vr1;

        return $this;
    }

    /**
     * Get vr1
     *
     * @return boolean
     */
    public function getVr1()
    {
        return $this->vr1;
    }

    /**
     * Set vr2
     *
     * @param boolean $vr2
     *
     * @return Trnxdoc
     */
    public function setVr2($vr2)
    {
        $this->vr2 = $vr2;

        return $this;
    }

    /**
     * Get vr2
     *
     * @return boolean
     */
    public function getVr2()
    {
        return $this->vr2;
    }

    /**
     * Set sb1
     *
     * @param boolean $sb1
     *
     * @return Trnxdoc
     */
    public function setSb1($sb1)
    {
        $this->sb1 = $sb1;

        return $this;
    }

    /**
     * Get sb1
     *
     * @return boolean
     */
    public function getSb1()
    {
        return $this->sb1;
    }

    /**
     * Set sb2
     *
     * @param boolean $sb2
     *
     * @return Trnxdoc
     */
    public function setSb2($sb2)
    {
        $this->sb2 = $sb2;

        return $this;
    }

    /**
     * Get sb2
     *
     * @return boolean
     */
    public function getSb2()
    {
        return $this->sb2;
    }

    /**
     * Set horas
     *
     * @param float $horas
     *
     * @return Trnxdoc
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return float
     */
    public function getHoras()
    {
        return $this->horas;
    }
}
