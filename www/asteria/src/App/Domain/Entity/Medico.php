<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medico
 *
 * @ORM\Table(name="medico", indexes={@ORM\Index(name="cmedico", columns={"cmedico", "xmedico"})})
 * @ORM\Entity
 */
class Medico
{
    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmedico = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xmedico", type="string", length=45, nullable=true)
     */
    private $xmedico;

    /**
     * @var string
     *
     * @ORM\Column(name="especial", type="string", length=45, nullable=true)
     */
    private $especial;

    /**
     * @var string
     *
     * @ORM\Column(name="amb", type="string", length=2, nullable=true)
     */
    private $amb = '01';

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=45, nullable=true)
     */
    private $direccion = 'nn';

    /**
     * @var string
     *
     * @ORM\Column(name="cdistrito", type="string", length=3, nullable=true)
     */
    private $cdistrito = 'n';

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mai", type="string", length=30, nullable=true)
     */
    private $mai = 'n';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchnace", type="date", nullable=true)
     */
    private $fchnace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchfin", type="date", nullable=true)
     */
    private $fchfin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchcese", type="date", nullable=true)
     */
    private $fchcese;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=8, nullable=true)
     */
    private $dni = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="colegio", type="string", length=6, nullable=true)
     */
    private $colegio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="aco", type="string", length=4, nullable=true)
     */
    private $aco = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="porcen1", type="float", precision=10, scale=2, nullable=true)
     */
    private $porcen1 = '50.00';

    /**
     * @var float
     *
     * @ORM\Column(name="porcen2", type="float", precision=10, scale=2, nullable=true)
     */
    private $porcen2 = '50.00';

    /**
     * @var float
     *
     * @ORM\Column(name="porcen3", type="float", precision=10, scale=2, nullable=true)
     */
    private $porcen3 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = 'A';

    /**
     * @var float
     *
     * @ORM\Column(name="debesol", type="float", precision=10, scale=2, nullable=true)
     */
    private $debesol = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="debedol", type="float", precision=10, scale=2, nullable=true)
     */
    private $debedol = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede = '000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="exclusivo", type="boolean", nullable=true)
     */
    private $exclusivo;

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
     * @var float
     *
     * @ORM\Column(name="horas", type="float", precision=10, scale=2, nullable=true)
     */
    private $horas = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="turno", type="integer", nullable=true)
     */
    private $turno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="docum", type="boolean", nullable=true)
     */
    private $docum = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchfac", type="date", nullable=true)
     */
    private $fchfac;

    /**
     * @var string
     *
     * @ORM\Column(name="cnivel", type="string", length=2, nullable=true)
     */
    private $cnivel = '01';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="renta", type="float", precision=10, scale=2, nullable=true)
     */
    private $renta = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="codarea", type="string", length=2, nullable=true)
     */
    private $codarea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="espec", type="boolean", nullable=true)
     */
    private $espec = '0';



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
     * Set xmedico
     *
     * @param string $xmedico
     *
     * @return Medico
     */
    public function setXmedico($xmedico)
    {
        $this->xmedico = $xmedico;

        return $this;
    }

    /**
     * Get xmedico
     *
     * @return string
     */
    public function getXmedico()
    {
        return $this->xmedico;
    }

    /**
     * Set especial
     *
     * @param string $especial
     *
     * @return Medico
     */
    public function setEspecial($especial)
    {
        $this->especial = $especial;

        return $this;
    }

    /**
     * Get especial
     *
     * @return string
     */
    public function getEspecial()
    {
        return $this->especial;
    }

    /**
     * Set amb
     *
     * @param string $amb
     *
     * @return Medico
     */
    public function setAmb($amb)
    {
        $this->amb = $amb;

        return $this;
    }

    /**
     * Get amb
     *
     * @return string
     */
    public function getAmb()
    {
        return $this->amb;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Medico
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cdistrito
     *
     * @param string $cdistrito
     *
     * @return Medico
     */
    public function setCdistrito($cdistrito)
    {
        $this->cdistrito = $cdistrito;

        return $this;
    }

    /**
     * Get cdistrito
     *
     * @return string
     */
    public function getCdistrito()
    {
        return $this->cdistrito;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Medico
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set mai
     *
     * @param string $mai
     *
     * @return Medico
     */
    public function setMai($mai)
    {
        $this->mai = $mai;

        return $this;
    }

    /**
     * Get mai
     *
     * @return string
     */
    public function getMai()
    {
        return $this->mai;
    }

    /**
     * Set fchnace
     *
     * @param \DateTime $fchnace
     *
     * @return Medico
     */
    public function setFchnace($fchnace)
    {
        $this->fchnace = $fchnace;

        return $this;
    }

    /**
     * Get fchnace
     *
     * @return \DateTime
     */
    public function getFchnace()
    {
        return $this->fchnace;
    }

    /**
     * Set fchfin
     *
     * @param \DateTime $fchfin
     *
     * @return Medico
     */
    public function setFchfin($fchfin)
    {
        $this->fchfin = $fchfin;

        return $this;
    }

    /**
     * Get fchfin
     *
     * @return \DateTime
     */
    public function getFchfin()
    {
        return $this->fchfin;
    }

    /**
     * Set fchcese
     *
     * @param \DateTime $fchcese
     *
     * @return Medico
     */
    public function setFchcese($fchcese)
    {
        $this->fchcese = $fchcese;

        return $this;
    }

    /**
     * Get fchcese
     *
     * @return \DateTime
     */
    public function getFchcese()
    {
        return $this->fchcese;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Medico
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Medico
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;

        return $this;
    }

    /**
     * Get ruc
     *
     * @return string
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set colegio
     *
     * @param string $colegio
     *
     * @return Medico
     */
    public function setColegio($colegio)
    {
        $this->colegio = $colegio;

        return $this;
    }

    /**
     * Get colegio
     *
     * @return string
     */
    public function getColegio()
    {
        return $this->colegio;
    }

    /**
     * Set aco
     *
     * @param string $aco
     *
     * @return Medico
     */
    public function setAco($aco)
    {
        $this->aco = $aco;

        return $this;
    }

    /**
     * Get aco
     *
     * @return string
     */
    public function getAco()
    {
        return $this->aco;
    }

    /**
     * Set porcen1
     *
     * @param float $porcen1
     *
     * @return Medico
     */
    public function setPorcen1($porcen1)
    {
        $this->porcen1 = $porcen1;

        return $this;
    }

    /**
     * Get porcen1
     *
     * @return float
     */
    public function getPorcen1()
    {
        return $this->porcen1;
    }

    /**
     * Set porcen2
     *
     * @param float $porcen2
     *
     * @return Medico
     */
    public function setPorcen2($porcen2)
    {
        $this->porcen2 = $porcen2;

        return $this;
    }

    /**
     * Get porcen2
     *
     * @return float
     */
    public function getPorcen2()
    {
        return $this->porcen2;
    }

    /**
     * Set porcen3
     *
     * @param float $porcen3
     *
     * @return Medico
     */
    public function setPorcen3($porcen3)
    {
        $this->porcen3 = $porcen3;

        return $this;
    }

    /**
     * Get porcen3
     *
     * @return float
     */
    public function getPorcen3()
    {
        return $this->porcen3;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Medico
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
     * Set debesol
     *
     * @param float $debesol
     *
     * @return Medico
     */
    public function setDebesol($debesol)
    {
        $this->debesol = $debesol;

        return $this;
    }

    /**
     * Get debesol
     *
     * @return float
     */
    public function getDebesol()
    {
        return $this->debesol;
    }

    /**
     * Set debedol
     *
     * @param float $debedol
     *
     * @return Medico
     */
    public function setDebedol($debedol)
    {
        $this->debedol = $debedol;

        return $this;
    }

    /**
     * Get debedol
     *
     * @return float
     */
    public function getDebedol()
    {
        return $this->debedol;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Medico
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
     * Set exclusivo
     *
     * @param boolean $exclusivo
     *
     * @return Medico
     */
    public function setExclusivo($exclusivo)
    {
        $this->exclusivo = $exclusivo;

        return $this;
    }

    /**
     * Get exclusivo
     *
     * @return boolean
     */
    public function getExclusivo()
    {
        return $this->exclusivo;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Medico
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
     * @return Medico
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
     * @return Medico
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
     * @return Medico
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

    /**
     * Set horas
     *
     * @param float $horas
     *
     * @return Medico
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

    /**
     * Set turno
     *
     * @param integer $turno
     *
     * @return Medico
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return integer
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set docum
     *
     * @param boolean $docum
     *
     * @return Medico
     */
    public function setDocum($docum)
    {
        $this->docum = $docum;

        return $this;
    }

    /**
     * Get docum
     *
     * @return boolean
     */
    public function getDocum()
    {
        return $this->docum;
    }

    /**
     * Set fchfac
     *
     * @param \DateTime $fchfac
     *
     * @return Medico
     */
    public function setFchfac($fchfac)
    {
        $this->fchfac = $fchfac;

        return $this;
    }

    /**
     * Get fchfac
     *
     * @return \DateTime
     */
    public function getFchfac()
    {
        return $this->fchfac;
    }

    /**
     * Set cnivel
     *
     * @param string $cnivel
     *
     * @return Medico
     */
    public function setCnivel($cnivel)
    {
        $this->cnivel = $cnivel;

        return $this;
    }

    /**
     * Get cnivel
     *
     * @return string
     */
    public function getCnivel()
    {
        return $this->cnivel;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Medico
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
     * Set renta
     *
     * @param float $renta
     *
     * @return Medico
     */
    public function setRenta($renta)
    {
        $this->renta = $renta;

        return $this;
    }

    /**
     * Get renta
     *
     * @return float
     */
    public function getRenta()
    {
        return $this->renta;
    }

    /**
     * Set codarea
     *
     * @param string $codarea
     *
     * @return Medico
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

    /**
     * Set espec
     *
     * @param boolean $espec
     *
     * @return Medico
     */
    public function setEspec($espec)
    {
        $this->espec = $espec;

        return $this;
    }

    /**
     * Get espec
     *
     * @return boolean
     */
    public function getEspec()
    {
        return $this->espec;
    }
}
