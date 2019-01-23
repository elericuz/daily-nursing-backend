<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratorio
 *
 * @ORM\Table(name="laboratorio")
 * @ORM\Entity
 */
class Laboratorio
{
    /**
     * @var string
     *
     * @ORM\Column(name="unico", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unico = '';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=10, nullable=false)
     */
    private $clave = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cclien", type="string", length=4, nullable=true)
     */
    private $cclien;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda = 'S';

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=10, scale=3, nullable=true)
     */
    private $tipcam = '1.000';

    /**
     * @var string
     *
     * @ORM\Column(name="tipprot", type="string", length=3, nullable=true)
     */
    private $tipprot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fech_ing", type="date", nullable=true)
     */
    private $fechIng;

    /**
     * @var string
     *
     * @ORM\Column(name="turing", type="string", length=2, nullable=true)
     */
    private $turing;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fech_sal", type="date", nullable=true)
     */
    private $fechSal;

    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=11, nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="turno", type="string", length=2, nullable=true)
     */
    private $turno;

    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=true)
     */
    private $cpac;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=10, nullable=true)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=30, nullable=true)
     */
    private $resumen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cantidad", type="boolean", nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="pieza", type="string", length=17, nullable=true)
     */
    private $pieza = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="repite", type="string", length=11, nullable=true)
     */
    private $repite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=11, nullable=true)
     */
    private $color = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="articulado", type="string", length=14, nullable=true)
     */
    private $articulado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ctecnico", type="string", length=3, nullable=true)
     */
    private $ctecnico = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="incentivo", type="float", precision=10, scale=2, nullable=true)
     */
    private $incentivo = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="tot_incent", type="float", precision=10, scale=2, nullable=true)
     */
    private $totIncent = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="total_ing", type="float", precision=10, scale=2, nullable=true)
     */
    private $totalIng = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="tiptrab", type="string", length=1, nullable=true)
     */
    private $tiptrab = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=80, nullable=true)
     */
    private $observa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pagatec", type="float", precision=10, scale=2, nullable=true)
     */
    private $pagatec = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="crelacio", type="string", length=2, nullable=true)
     */
    private $crelacio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nrelacio", type="string", length=10, nullable=true)
     */
    private $nrelacio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var string
     *
     * @ORM\Column(name="trabajo", type="string", length=200, nullable=true)
     */
    private $trabajo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reg", type="boolean", nullable=true)
     */
    private $reg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anta", type="boolean", nullable=true)
     */
    private $anta;

    /**
     * @var string
     *
     * @ORM\Column(name="abrevia", type="string", length=4, nullable=true)
     */
    private $abrevia = 'a';

    /**
     * @var string
     *
     * @ORM\Column(name="cprov", type="string", length=4, nullable=true)
     */
    private $cprov = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fpago", type="date", nullable=true)
     */
    private $fpago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pago", type="boolean", nullable=true)
     */
    private $pago = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="precunit", type="float", precision=8, scale=2, nullable=true)
     */
    private $precunit = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="item", type="float", precision=2, scale=0, nullable=true)
     */
    private $item = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=80, nullable=true)
     */
    private $ubicacion = 'c:\\integro';

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=80, nullable=true)
     */
    private $observaciones;



    /**
     * Get unico
     *
     * @return string
     */
    public function getUnico()
    {
        return $this->unico;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Laboratorio
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
     * Set clave
     *
     * @param string $clave
     *
     * @return Laboratorio
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
     * Set cclien
     *
     * @param string $cclien
     *
     * @return Laboratorio
     */
    public function setCclien($cclien)
    {
        $this->cclien = $cclien;

        return $this;
    }

    /**
     * Get cclien
     *
     * @return string
     */
    public function getCclien()
    {
        return $this->cclien;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Laboratorio
     */
    public function setCmoneda($cmoneda)
    {
        $this->cmoneda = $cmoneda;

        return $this;
    }

    /**
     * Get cmoneda
     *
     * @return string
     */
    public function getCmoneda()
    {
        return $this->cmoneda;
    }

    /**
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Laboratorio
     */
    public function setTipcam($tipcam)
    {
        $this->tipcam = $tipcam;

        return $this;
    }

    /**
     * Get tipcam
     *
     * @return float
     */
    public function getTipcam()
    {
        return $this->tipcam;
    }

    /**
     * Set tipprot
     *
     * @param string $tipprot
     *
     * @return Laboratorio
     */
    public function setTipprot($tipprot)
    {
        $this->tipprot = $tipprot;

        return $this;
    }

    /**
     * Get tipprot
     *
     * @return string
     */
    public function getTipprot()
    {
        return $this->tipprot;
    }

    /**
     * Set fechIng
     *
     * @param \DateTime $fechIng
     *
     * @return Laboratorio
     */
    public function setFechIng($fechIng)
    {
        $this->fechIng = $fechIng;

        return $this;
    }

    /**
     * Get fechIng
     *
     * @return \DateTime
     */
    public function getFechIng()
    {
        return $this->fechIng;
    }

    /**
     * Set turing
     *
     * @param string $turing
     *
     * @return Laboratorio
     */
    public function setTuring($turing)
    {
        $this->turing = $turing;

        return $this;
    }

    /**
     * Get turing
     *
     * @return string
     */
    public function getTuring()
    {
        return $this->turing;
    }

    /**
     * Set fechSal
     *
     * @param \DateTime $fechSal
     *
     * @return Laboratorio
     */
    public function setFechSal($fechSal)
    {
        $this->fechSal = $fechSal;

        return $this;
    }

    /**
     * Get fechSal
     *
     * @return \DateTime
     */
    public function getFechSal()
    {
        return $this->fechSal;
    }

    /**
     * Set hora
     *
     * @param string $hora
     *
     * @return Laboratorio
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set turno
     *
     * @param string $turno
     *
     * @return Laboratorio
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return string
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set cpac
     *
     * @param string $cpac
     *
     * @return Laboratorio
     */
    public function setCpac($cpac)
    {
        $this->cpac = $cpac;

        return $this;
    }

    /**
     * Get cpac
     *
     * @return string
     */
    public function getCpac()
    {
        return $this->cpac;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     *
     * @return Laboratorio
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     *
     * @return Laboratorio
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set cantidad
     *
     * @param boolean $cantidad
     *
     * @return Laboratorio
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return boolean
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set pieza
     *
     * @param string $pieza
     *
     * @return Laboratorio
     */
    public function setPieza($pieza)
    {
        $this->pieza = $pieza;

        return $this;
    }

    /**
     * Get pieza
     *
     * @return string
     */
    public function getPieza()
    {
        return $this->pieza;
    }

    /**
     * Set repite
     *
     * @param string $repite
     *
     * @return Laboratorio
     */
    public function setRepite($repite)
    {
        $this->repite = $repite;

        return $this;
    }

    /**
     * Get repite
     *
     * @return string
     */
    public function getRepite()
    {
        return $this->repite;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Laboratorio
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set articulado
     *
     * @param string $articulado
     *
     * @return Laboratorio
     */
    public function setArticulado($articulado)
    {
        $this->articulado = $articulado;

        return $this;
    }

    /**
     * Get articulado
     *
     * @return string
     */
    public function getArticulado()
    {
        return $this->articulado;
    }

    /**
     * Set ctecnico
     *
     * @param string $ctecnico
     *
     * @return Laboratorio
     */
    public function setCtecnico($ctecnico)
    {
        $this->ctecnico = $ctecnico;

        return $this;
    }

    /**
     * Get ctecnico
     *
     * @return string
     */
    public function getCtecnico()
    {
        return $this->ctecnico;
    }

    /**
     * Set incentivo
     *
     * @param float $incentivo
     *
     * @return Laboratorio
     */
    public function setIncentivo($incentivo)
    {
        $this->incentivo = $incentivo;

        return $this;
    }

    /**
     * Get incentivo
     *
     * @return float
     */
    public function getIncentivo()
    {
        return $this->incentivo;
    }

    /**
     * Set totIncent
     *
     * @param float $totIncent
     *
     * @return Laboratorio
     */
    public function setTotIncent($totIncent)
    {
        $this->totIncent = $totIncent;

        return $this;
    }

    /**
     * Get totIncent
     *
     * @return float
     */
    public function getTotIncent()
    {
        return $this->totIncent;
    }

    /**
     * Set totalIng
     *
     * @param float $totalIng
     *
     * @return Laboratorio
     */
    public function setTotalIng($totalIng)
    {
        $this->totalIng = $totalIng;

        return $this;
    }

    /**
     * Get totalIng
     *
     * @return float
     */
    public function getTotalIng()
    {
        return $this->totalIng;
    }

    /**
     * Set tiptrab
     *
     * @param string $tiptrab
     *
     * @return Laboratorio
     */
    public function setTiptrab($tiptrab)
    {
        $this->tiptrab = $tiptrab;

        return $this;
    }

    /**
     * Get tiptrab
     *
     * @return string
     */
    public function getTiptrab()
    {
        return $this->tiptrab;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Laboratorio
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Laboratorio
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pagatec
     *
     * @param float $pagatec
     *
     * @return Laboratorio
     */
    public function setPagatec($pagatec)
    {
        $this->pagatec = $pagatec;

        return $this;
    }

    /**
     * Get pagatec
     *
     * @return float
     */
    public function getPagatec()
    {
        return $this->pagatec;
    }

    /**
     * Set crelacio
     *
     * @param string $crelacio
     *
     * @return Laboratorio
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
     * @return Laboratorio
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

    /**
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Laboratorio
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
     * Set trabajo
     *
     * @param string $trabajo
     *
     * @return Laboratorio
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;

        return $this;
    }

    /**
     * Get trabajo
     *
     * @return string
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * Set reg
     *
     * @param boolean $reg
     *
     * @return Laboratorio
     */
    public function setReg($reg)
    {
        $this->reg = $reg;

        return $this;
    }

    /**
     * Get reg
     *
     * @return boolean
     */
    public function getReg()
    {
        return $this->reg;
    }

    /**
     * Set anta
     *
     * @param boolean $anta
     *
     * @return Laboratorio
     */
    public function setAnta($anta)
    {
        $this->anta = $anta;

        return $this;
    }

    /**
     * Get anta
     *
     * @return boolean
     */
    public function getAnta()
    {
        return $this->anta;
    }

    /**
     * Set abrevia
     *
     * @param string $abrevia
     *
     * @return Laboratorio
     */
    public function setAbrevia($abrevia)
    {
        $this->abrevia = $abrevia;

        return $this;
    }

    /**
     * Get abrevia
     *
     * @return string
     */
    public function getAbrevia()
    {
        return $this->abrevia;
    }

    /**
     * Set cprov
     *
     * @param string $cprov
     *
     * @return Laboratorio
     */
    public function setCprov($cprov)
    {
        $this->cprov = $cprov;

        return $this;
    }

    /**
     * Get cprov
     *
     * @return string
     */
    public function getCprov()
    {
        return $this->cprov;
    }

    /**
     * Set fpago
     *
     * @param \DateTime $fpago
     *
     * @return Laboratorio
     */
    public function setFpago($fpago)
    {
        $this->fpago = $fpago;

        return $this;
    }

    /**
     * Get fpago
     *
     * @return \DateTime
     */
    public function getFpago()
    {
        return $this->fpago;
    }

    /**
     * Set pago
     *
     * @param boolean $pago
     *
     * @return Laboratorio
     */
    public function setPago($pago)
    {
        $this->pago = $pago;

        return $this;
    }

    /**
     * Get pago
     *
     * @return boolean
     */
    public function getPago()
    {
        return $this->pago;
    }

    /**
     * Set precunit
     *
     * @param float $precunit
     *
     * @return Laboratorio
     */
    public function setPrecunit($precunit)
    {
        $this->precunit = $precunit;

        return $this;
    }

    /**
     * Get precunit
     *
     * @return float
     */
    public function getPrecunit()
    {
        return $this->precunit;
    }

    /**
     * Set item
     *
     * @param float $item
     *
     * @return Laboratorio
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return float
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Laboratorio
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Laboratorio
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
