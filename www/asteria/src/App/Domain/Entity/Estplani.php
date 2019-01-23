<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estplani
 *
 * @ORM\Table(name="estplani")
 * @ORM\Entity
 */
class Estplani
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
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha = '0000-00-00';

    /**
     * @var float
     *
     * @ORM\Column(name="ads", type="float", precision=10, scale=2, nullable=true)
     */
    private $ads = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="addo", type="float", precision=10, scale=2, nullable=true)
     */
    private $addo = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="adtc", type="float", precision=10, scale=2, nullable=true)
     */
    private $adtc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mcs", type="float", precision=10, scale=2, nullable=true)
     */
    private $mcs = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mcd", type="float", precision=10, scale=2, nullable=true)
     */
    private $mcd = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="mctc", type="float", precision=10, scale=2, nullable=true)
     */
    private $mctc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="avs", type="float", precision=10, scale=2, nullable=true)
     */
    private $avs = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="avd", type="float", precision=10, scale=2, nullable=true)
     */
    private $avd = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="avtc", type="float", precision=10, scale=2, nullable=true)
     */
    private $avtc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pis", type="float", precision=10, scale=2, nullable=true)
     */
    private $pis = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pid", type="float", precision=10, scale=2, nullable=true)
     */
    private $pid = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pitc", type="float", precision=10, scale=2, nullable=true)
     */
    private $pitc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="ras", type="float", precision=10, scale=2, nullable=true)
     */
    private $ras = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rad", type="float", precision=10, scale=2, nullable=true)
     */
    private $rad = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="ratc", type="float", precision=10, scale=2, nullable=true)
     */
    private $ratc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="las", type="float", precision=10, scale=2, nullable=true)
     */
    private $las = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="lad", type="float", precision=10, scale=2, nullable=true)
     */
    private $lad = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="latc", type="float", precision=10, scale=2, nullable=true)
     */
    private $latc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="crs", type="float", precision=10, scale=2, nullable=true)
     */
    private $crs = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="crd", type="float", precision=10, scale=2, nullable=true)
     */
    private $crd = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="sus", type="float", precision=10, scale=2, nullable=true)
     */
    private $sus = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="sud", type="float", precision=10, scale=2, nullable=true)
     */
    private $sud = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="sutc", type="float", precision=10, scale=2, nullable=true)
     */
    private $sutc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="cbs", type="float", precision=10, scale=2, nullable=true)
     */
    private $cbs = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="cbd", type="float", precision=10, scale=2, nullable=true)
     */
    private $cbd = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="hms", type="float", precision=10, scale=2, nullable=true)
     */
    private $hms = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="hmd", type="float", precision=10, scale=2, nullable=true)
     */
    private $hmd = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="hmtc", type="float", precision=10, scale=2, nullable=true)
     */
    private $hmtc = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="gas", type="float", precision=10, scale=2, nullable=true)
     */
    private $gas = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="gad", type="float", precision=10, scale=2, nullable=true)
     */
    private $gad = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="tis", type="float", precision=10, scale=2, nullable=true)
     */
    private $tis = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="tid", type="float", precision=10, scale=2, nullable=true)
     */
    private $tid = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="titc", type="float", precision=10, scale=2, nullable=true)
     */
    private $titc = '0.00';



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
     * @return Estplani
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
     * Set ads
     *
     * @param float $ads
     *
     * @return Estplani
     */
    public function setAds($ads)
    {
        $this->ads = $ads;

        return $this;
    }

    /**
     * Get ads
     *
     * @return float
     */
    public function getAds()
    {
        return $this->ads;
    }

    /**
     * Set addo
     *
     * @param float $addo
     *
     * @return Estplani
     */
    public function setAddo($addo)
    {
        $this->addo = $addo;

        return $this;
    }

    /**
     * Get addo
     *
     * @return float
     */
    public function getAddo()
    {
        return $this->addo;
    }

    /**
     * Set adtc
     *
     * @param float $adtc
     *
     * @return Estplani
     */
    public function setAdtc($adtc)
    {
        $this->adtc = $adtc;

        return $this;
    }

    /**
     * Get adtc
     *
     * @return float
     */
    public function getAdtc()
    {
        return $this->adtc;
    }

    /**
     * Set mcs
     *
     * @param float $mcs
     *
     * @return Estplani
     */
    public function setMcs($mcs)
    {
        $this->mcs = $mcs;

        return $this;
    }

    /**
     * Get mcs
     *
     * @return float
     */
    public function getMcs()
    {
        return $this->mcs;
    }

    /**
     * Set mcd
     *
     * @param float $mcd
     *
     * @return Estplani
     */
    public function setMcd($mcd)
    {
        $this->mcd = $mcd;

        return $this;
    }

    /**
     * Get mcd
     *
     * @return float
     */
    public function getMcd()
    {
        return $this->mcd;
    }

    /**
     * Set mctc
     *
     * @param float $mctc
     *
     * @return Estplani
     */
    public function setMctc($mctc)
    {
        $this->mctc = $mctc;

        return $this;
    }

    /**
     * Get mctc
     *
     * @return float
     */
    public function getMctc()
    {
        return $this->mctc;
    }

    /**
     * Set avs
     *
     * @param float $avs
     *
     * @return Estplani
     */
    public function setAvs($avs)
    {
        $this->avs = $avs;

        return $this;
    }

    /**
     * Get avs
     *
     * @return float
     */
    public function getAvs()
    {
        return $this->avs;
    }

    /**
     * Set avd
     *
     * @param float $avd
     *
     * @return Estplani
     */
    public function setAvd($avd)
    {
        $this->avd = $avd;

        return $this;
    }

    /**
     * Get avd
     *
     * @return float
     */
    public function getAvd()
    {
        return $this->avd;
    }

    /**
     * Set avtc
     *
     * @param float $avtc
     *
     * @return Estplani
     */
    public function setAvtc($avtc)
    {
        $this->avtc = $avtc;

        return $this;
    }

    /**
     * Get avtc
     *
     * @return float
     */
    public function getAvtc()
    {
        return $this->avtc;
    }

    /**
     * Set pis
     *
     * @param float $pis
     *
     * @return Estplani
     */
    public function setPis($pis)
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * Get pis
     *
     * @return float
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * Set pid
     *
     * @param float $pid
     *
     * @return Estplani
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return float
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set pitc
     *
     * @param float $pitc
     *
     * @return Estplani
     */
    public function setPitc($pitc)
    {
        $this->pitc = $pitc;

        return $this;
    }

    /**
     * Get pitc
     *
     * @return float
     */
    public function getPitc()
    {
        return $this->pitc;
    }

    /**
     * Set ras
     *
     * @param float $ras
     *
     * @return Estplani
     */
    public function setRas($ras)
    {
        $this->ras = $ras;

        return $this;
    }

    /**
     * Get ras
     *
     * @return float
     */
    public function getRas()
    {
        return $this->ras;
    }

    /**
     * Set rad
     *
     * @param float $rad
     *
     * @return Estplani
     */
    public function setRad($rad)
    {
        $this->rad = $rad;

        return $this;
    }

    /**
     * Get rad
     *
     * @return float
     */
    public function getRad()
    {
        return $this->rad;
    }

    /**
     * Set ratc
     *
     * @param float $ratc
     *
     * @return Estplani
     */
    public function setRatc($ratc)
    {
        $this->ratc = $ratc;

        return $this;
    }

    /**
     * Get ratc
     *
     * @return float
     */
    public function getRatc()
    {
        return $this->ratc;
    }

    /**
     * Set las
     *
     * @param float $las
     *
     * @return Estplani
     */
    public function setLas($las)
    {
        $this->las = $las;

        return $this;
    }

    /**
     * Get las
     *
     * @return float
     */
    public function getLas()
    {
        return $this->las;
    }

    /**
     * Set lad
     *
     * @param float $lad
     *
     * @return Estplani
     */
    public function setLad($lad)
    {
        $this->lad = $lad;

        return $this;
    }

    /**
     * Get lad
     *
     * @return float
     */
    public function getLad()
    {
        return $this->lad;
    }

    /**
     * Set latc
     *
     * @param float $latc
     *
     * @return Estplani
     */
    public function setLatc($latc)
    {
        $this->latc = $latc;

        return $this;
    }

    /**
     * Get latc
     *
     * @return float
     */
    public function getLatc()
    {
        return $this->latc;
    }

    /**
     * Set crs
     *
     * @param float $crs
     *
     * @return Estplani
     */
    public function setCrs($crs)
    {
        $this->crs = $crs;

        return $this;
    }

    /**
     * Get crs
     *
     * @return float
     */
    public function getCrs()
    {
        return $this->crs;
    }

    /**
     * Set crd
     *
     * @param float $crd
     *
     * @return Estplani
     */
    public function setCrd($crd)
    {
        $this->crd = $crd;

        return $this;
    }

    /**
     * Get crd
     *
     * @return float
     */
    public function getCrd()
    {
        return $this->crd;
    }

    /**
     * Set sus
     *
     * @param float $sus
     *
     * @return Estplani
     */
    public function setSus($sus)
    {
        $this->sus = $sus;

        return $this;
    }

    /**
     * Get sus
     *
     * @return float
     */
    public function getSus()
    {
        return $this->sus;
    }

    /**
     * Set sud
     *
     * @param float $sud
     *
     * @return Estplani
     */
    public function setSud($sud)
    {
        $this->sud = $sud;

        return $this;
    }

    /**
     * Get sud
     *
     * @return float
     */
    public function getSud()
    {
        return $this->sud;
    }

    /**
     * Set sutc
     *
     * @param float $sutc
     *
     * @return Estplani
     */
    public function setSutc($sutc)
    {
        $this->sutc = $sutc;

        return $this;
    }

    /**
     * Get sutc
     *
     * @return float
     */
    public function getSutc()
    {
        return $this->sutc;
    }

    /**
     * Set cbs
     *
     * @param float $cbs
     *
     * @return Estplani
     */
    public function setCbs($cbs)
    {
        $this->cbs = $cbs;

        return $this;
    }

    /**
     * Get cbs
     *
     * @return float
     */
    public function getCbs()
    {
        return $this->cbs;
    }

    /**
     * Set cbd
     *
     * @param float $cbd
     *
     * @return Estplani
     */
    public function setCbd($cbd)
    {
        $this->cbd = $cbd;

        return $this;
    }

    /**
     * Get cbd
     *
     * @return float
     */
    public function getCbd()
    {
        return $this->cbd;
    }

    /**
     * Set hms
     *
     * @param float $hms
     *
     * @return Estplani
     */
    public function setHms($hms)
    {
        $this->hms = $hms;

        return $this;
    }

    /**
     * Get hms
     *
     * @return float
     */
    public function getHms()
    {
        return $this->hms;
    }

    /**
     * Set hmd
     *
     * @param float $hmd
     *
     * @return Estplani
     */
    public function setHmd($hmd)
    {
        $this->hmd = $hmd;

        return $this;
    }

    /**
     * Get hmd
     *
     * @return float
     */
    public function getHmd()
    {
        return $this->hmd;
    }

    /**
     * Set hmtc
     *
     * @param float $hmtc
     *
     * @return Estplani
     */
    public function setHmtc($hmtc)
    {
        $this->hmtc = $hmtc;

        return $this;
    }

    /**
     * Get hmtc
     *
     * @return float
     */
    public function getHmtc()
    {
        return $this->hmtc;
    }

    /**
     * Set gas
     *
     * @param float $gas
     *
     * @return Estplani
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return float
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set gad
     *
     * @param float $gad
     *
     * @return Estplani
     */
    public function setGad($gad)
    {
        $this->gad = $gad;

        return $this;
    }

    /**
     * Get gad
     *
     * @return float
     */
    public function getGad()
    {
        return $this->gad;
    }

    /**
     * Set tis
     *
     * @param float $tis
     *
     * @return Estplani
     */
    public function setTis($tis)
    {
        $this->tis = $tis;

        return $this;
    }

    /**
     * Get tis
     *
     * @return float
     */
    public function getTis()
    {
        return $this->tis;
    }

    /**
     * Set tid
     *
     * @param float $tid
     *
     * @return Estplani
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return float
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set titc
     *
     * @param float $titc
     *
     * @return Estplani
     */
    public function setTitc($titc)
    {
        $this->titc = $titc;

        return $this;
    }

    /**
     * Get titc
     *
     * @return float
     */
    public function getTitc()
    {
        return $this->titc;
    }
}
