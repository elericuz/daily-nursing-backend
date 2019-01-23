<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salida
 *
 * @ORM\Table(name="salida", indexes={@ORM\Index(name="num", columns={"num", "cperso", "fecha"})})
 * @ORM\Entity
 */
class Salida
{
    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $csede = '';

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $num = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cperso", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cperso = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecha = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var string
     *
     * @ORM\Column(name="carea", type="string", length=1, nullable=true)
     */
    private $carea;

    /**
     * @var string
     *
     * @ORM\Column(name="justi", type="string", length=1, nullable=true)
     */
    private $justi;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="unimed", type="string", length=3, nullable=true)
     */
    private $unimed;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=1, nullable=true)
     */
    private $motivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="c_cita", type="boolean", nullable=true)
     */
    private $cCita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="c_del", type="date", nullable=true)
     */
    private $cDel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="c_al", type="date", nullable=true)
     */
    private $cAl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="c_perasis", type="boolean", nullable=true)
     */
    private $cPerasis;

    /**
     * @var string
     *
     * @ORM\Column(name="xasisten", type="string", length=30, nullable=true)
     */
    private $xasisten;

    /**
     * @var boolean
     *
     * @ORM\Column(name="c_reehor", type="boolean", nullable=true)
     */
    private $cReehor;

    /**
     * @var string
     *
     * @ORM\Column(name="cdochora", type="string", length=3, nullable=true)
     */
    private $cdochora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="c_reeguar", type="boolean", nullable=true)
     */
    private $cReeguar;

    /**
     * @var string
     *
     * @ORM\Column(name="cdocreem", type="string", length=3, nullable=true)
     */
    private $cdocreem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="luc_autdes", type="boolean", nullable=true)
     */
    private $lucAutdes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="luc_pagdir", type="boolean", nullable=true)
     */
    private $lucPagdir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="luc_otra", type="boolean", nullable=true)
     */
    private $lucOtra;

    /**
     * @var string
     *
     * @ORM\Column(name="moneluc", type="string", length=1, nullable=true)
     */
    private $moneluc;

    /**
     * @var float
     *
     * @ORM\Column(name="importeluc", type="float", precision=10, scale=2, nullable=true)
     */
    private $importeluc;

    /**
     * @var string
     *
     * @ORM\Column(name="tipolucro", type="string", length=2, nullable=true)
     */
    private $tipolucro;

    /**
     * @var string
     *
     * @ORM\Column(name="obslucro", type="string", length=20, nullable=true)
     */
    private $obslucro;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=250, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="autoriza", type="string", length=20, nullable=true)
     */
    private $autoriza;

    /**
     * @var string
     *
     * @ORM\Column(name="coordina", type="string", length=20, nullable=true)
     */
    private $coordina;

    /**
     * @var string
     *
     * @ORM\Column(name="creareg", type="string", length=30, nullable=true)
     */
    private $creareg;

    /**
     * @var string
     *
     * @ORM\Column(name="modireg", type="string", length=30, nullable=true)
     */
    private $modireg;

    /**
     * @var string
     *
     * @ORM\Column(name="borrreg", type="string", length=30, nullable=true)
     */
    private $borrreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Salida
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
     * Set num
     *
     * @param string $num
     *
     * @return Salida
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set cperso
     *
     * @param string $cperso
     *
     * @return Salida
     */
    public function setCperso($cperso)
    {
        $this->cperso = $cperso;

        return $this;
    }

    /**
     * Get cperso
     *
     * @return string
     */
    public function getCperso()
    {
        return $this->cperso;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Salida
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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Salida
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
     * Set carea
     *
     * @param string $carea
     *
     * @return Salida
     */
    public function setCarea($carea)
    {
        $this->carea = $carea;

        return $this;
    }

    /**
     * Get carea
     *
     * @return string
     */
    public function getCarea()
    {
        return $this->carea;
    }

    /**
     * Set justi
     *
     * @param string $justi
     *
     * @return Salida
     */
    public function setJusti($justi)
    {
        $this->justi = $justi;

        return $this;
    }

    /**
     * Get justi
     *
     * @return string
     */
    public function getJusti()
    {
        return $this->justi;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Salida
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Salida
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set unimed
     *
     * @param string $unimed
     *
     * @return Salida
     */
    public function setUnimed($unimed)
    {
        $this->unimed = $unimed;

        return $this;
    }

    /**
     * Get unimed
     *
     * @return string
     */
    public function getUnimed()
    {
        return $this->unimed;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return Salida
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set cCita
     *
     * @param boolean $cCita
     *
     * @return Salida
     */
    public function setCCita($cCita)
    {
        $this->cCita = $cCita;

        return $this;
    }

    /**
     * Get cCita
     *
     * @return boolean
     */
    public function getCCita()
    {
        return $this->cCita;
    }

    /**
     * Set cDel
     *
     * @param \DateTime $cDel
     *
     * @return Salida
     */
    public function setCDel($cDel)
    {
        $this->cDel = $cDel;

        return $this;
    }

    /**
     * Get cDel
     *
     * @return \DateTime
     */
    public function getCDel()
    {
        return $this->cDel;
    }

    /**
     * Set cAl
     *
     * @param \DateTime $cAl
     *
     * @return Salida
     */
    public function setCAl($cAl)
    {
        $this->cAl = $cAl;

        return $this;
    }

    /**
     * Get cAl
     *
     * @return \DateTime
     */
    public function getCAl()
    {
        return $this->cAl;
    }

    /**
     * Set cPerasis
     *
     * @param boolean $cPerasis
     *
     * @return Salida
     */
    public function setCPerasis($cPerasis)
    {
        $this->cPerasis = $cPerasis;

        return $this;
    }

    /**
     * Get cPerasis
     *
     * @return boolean
     */
    public function getCPerasis()
    {
        return $this->cPerasis;
    }

    /**
     * Set xasisten
     *
     * @param string $xasisten
     *
     * @return Salida
     */
    public function setXasisten($xasisten)
    {
        $this->xasisten = $xasisten;

        return $this;
    }

    /**
     * Get xasisten
     *
     * @return string
     */
    public function getXasisten()
    {
        return $this->xasisten;
    }

    /**
     * Set cReehor
     *
     * @param boolean $cReehor
     *
     * @return Salida
     */
    public function setCReehor($cReehor)
    {
        $this->cReehor = $cReehor;

        return $this;
    }

    /**
     * Get cReehor
     *
     * @return boolean
     */
    public function getCReehor()
    {
        return $this->cReehor;
    }

    /**
     * Set cdochora
     *
     * @param string $cdochora
     *
     * @return Salida
     */
    public function setCdochora($cdochora)
    {
        $this->cdochora = $cdochora;

        return $this;
    }

    /**
     * Get cdochora
     *
     * @return string
     */
    public function getCdochora()
    {
        return $this->cdochora;
    }

    /**
     * Set cReeguar
     *
     * @param boolean $cReeguar
     *
     * @return Salida
     */
    public function setCReeguar($cReeguar)
    {
        $this->cReeguar = $cReeguar;

        return $this;
    }

    /**
     * Get cReeguar
     *
     * @return boolean
     */
    public function getCReeguar()
    {
        return $this->cReeguar;
    }

    /**
     * Set cdocreem
     *
     * @param string $cdocreem
     *
     * @return Salida
     */
    public function setCdocreem($cdocreem)
    {
        $this->cdocreem = $cdocreem;

        return $this;
    }

    /**
     * Get cdocreem
     *
     * @return string
     */
    public function getCdocreem()
    {
        return $this->cdocreem;
    }

    /**
     * Set lucAutdes
     *
     * @param boolean $lucAutdes
     *
     * @return Salida
     */
    public function setLucAutdes($lucAutdes)
    {
        $this->lucAutdes = $lucAutdes;

        return $this;
    }

    /**
     * Get lucAutdes
     *
     * @return boolean
     */
    public function getLucAutdes()
    {
        return $this->lucAutdes;
    }

    /**
     * Set lucPagdir
     *
     * @param boolean $lucPagdir
     *
     * @return Salida
     */
    public function setLucPagdir($lucPagdir)
    {
        $this->lucPagdir = $lucPagdir;

        return $this;
    }

    /**
     * Get lucPagdir
     *
     * @return boolean
     */
    public function getLucPagdir()
    {
        return $this->lucPagdir;
    }

    /**
     * Set lucOtra
     *
     * @param boolean $lucOtra
     *
     * @return Salida
     */
    public function setLucOtra($lucOtra)
    {
        $this->lucOtra = $lucOtra;

        return $this;
    }

    /**
     * Get lucOtra
     *
     * @return boolean
     */
    public function getLucOtra()
    {
        return $this->lucOtra;
    }

    /**
     * Set moneluc
     *
     * @param string $moneluc
     *
     * @return Salida
     */
    public function setMoneluc($moneluc)
    {
        $this->moneluc = $moneluc;

        return $this;
    }

    /**
     * Get moneluc
     *
     * @return string
     */
    public function getMoneluc()
    {
        return $this->moneluc;
    }

    /**
     * Set importeluc
     *
     * @param float $importeluc
     *
     * @return Salida
     */
    public function setImporteluc($importeluc)
    {
        $this->importeluc = $importeluc;

        return $this;
    }

    /**
     * Get importeluc
     *
     * @return float
     */
    public function getImporteluc()
    {
        return $this->importeluc;
    }

    /**
     * Set tipolucro
     *
     * @param string $tipolucro
     *
     * @return Salida
     */
    public function setTipolucro($tipolucro)
    {
        $this->tipolucro = $tipolucro;

        return $this;
    }

    /**
     * Get tipolucro
     *
     * @return string
     */
    public function getTipolucro()
    {
        return $this->tipolucro;
    }

    /**
     * Set obslucro
     *
     * @param string $obslucro
     *
     * @return Salida
     */
    public function setObslucro($obslucro)
    {
        $this->obslucro = $obslucro;

        return $this;
    }

    /**
     * Get obslucro
     *
     * @return string
     */
    public function getObslucro()
    {
        return $this->obslucro;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Salida
     */
    public function setObserva($observa)
    {
        $this->observa = $observa;

        return $this;
    }

    /**
     * Get observa
     *
     * @return string
     */
    public function getObserva()
    {
        return $this->observa;
    }

    /**
     * Set autoriza
     *
     * @param string $autoriza
     *
     * @return Salida
     */
    public function setAutoriza($autoriza)
    {
        $this->autoriza = $autoriza;

        return $this;
    }

    /**
     * Get autoriza
     *
     * @return string
     */
    public function getAutoriza()
    {
        return $this->autoriza;
    }

    /**
     * Set coordina
     *
     * @param string $coordina
     *
     * @return Salida
     */
    public function setCoordina($coordina)
    {
        $this->coordina = $coordina;

        return $this;
    }

    /**
     * Get coordina
     *
     * @return string
     */
    public function getCoordina()
    {
        return $this->coordina;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Salida
     */
    public function setCreareg($creareg)
    {
        $this->creareg = $creareg;

        return $this;
    }

    /**
     * Get creareg
     *
     * @return string
     */
    public function getCreareg()
    {
        return $this->creareg;
    }

    /**
     * Set modireg
     *
     * @param string $modireg
     *
     * @return Salida
     */
    public function setModireg($modireg)
    {
        $this->modireg = $modireg;

        return $this;
    }

    /**
     * Get modireg
     *
     * @return string
     */
    public function getModireg()
    {
        return $this->modireg;
    }

    /**
     * Set borrreg
     *
     * @param string $borrreg
     *
     * @return Salida
     */
    public function setBorrreg($borrreg)
    {
        $this->borrreg = $borrreg;

        return $this;
    }

    /**
     * Get borrreg
     *
     * @return string
     */
    public function getBorrreg()
    {
        return $this->borrreg;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Salida
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
