<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cmovim
 *
 * @ORM\Table(name="cmovim", indexes={@ORM\Index(name="ndocum", columns={"serie", "cdocum", "ndocum"}), @ORM\Index(name="paciente", columns={"paciente"})})
 * @ORM\Entity
 */
class Cmovim
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
     * @ORM\Column(name="cdocum", type="string", length=2, nullable=true)
     */
    private $cdocum;

    /**
     * @var string
     *
     * @ORM\Column(name="ndocum", type="string", length=10, nullable=true)
     */
    private $ndocum;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=3, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="razon", type="string", length=90, nullable=true)
     */
    private $razon;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clipac", type="boolean", nullable=true)
     */
    private $clipac = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=true)
     */
    private $cpac;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente", type="string", length=50, nullable=true)
     */
    private $paciente;

    /**
     * @var string
     *
     * @ORM\Column(name="dnipac", type="string", length=11, nullable=true)
     */
    private $dnipac;

    /**
     * @var boolean
     *
     * @ORM\Column(name="noconta", type="boolean", nullable=true)
     */
    private $noconta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dirpac", type="string", length=80, nullable=true)
     */
    private $dirpac;

    /**
     * @var string
     *
     * @ORM\Column(name="telpac", type="string", length=20, nullable=true)
     */
    private $telpac;

    /**
     * @var string
     *
     * @ORM\Column(name="emapac", type="string", length=70, nullable=true)
     */
    private $emapac;

    /**
     * @var string
     *
     * @ORM\Column(name="dispac", type="string", length=6, nullable=true)
     */
    private $dispac;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var float
     *
     * @ORM\Column(name="base", type="float", precision=10, scale=2, nullable=true)
     */
    private $base;

    /**
     * @var float
     *
     * @ORM\Column(name="igv", type="float", precision=10, scale=2, nullable=true)
     */
    private $igv;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="laborat", type="float", precision=10, scale=2, nullable=true)
     */
    private $laborat;

    /**
     * @var string
     *
     * @ORM\Column(name="anombrede", type="string", length=1, nullable=true)
     */
    private $anombrede;

    /**
     * @var string
     *
     * @ORM\Column(name="cdestino", type="string", length=4, nullable=true)
     */
    private $cdestino;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=7, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="casegura", type="string", length=4, nullable=true)
     */
    private $casegura;

    /**
     * @var string
     *
     * @ORM\Column(name="cempresa", type="string", length=4, nullable=true)
     */
    private $cempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="poliza", type="string", length=20, nullable=true)
     */
    private $poliza;

    /**
     * @var string
     *
     * @ORM\Column(name="tdocum", type="string", length=2, nullable=true)
     */
    private $tdocum;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda", type="string", length=1, nullable=true)
     */
    private $cmoneda;

    /**
     * @var float
     *
     * @ORM\Column(name="pigv", type="float", precision=7, scale=3, nullable=true)
     */
    private $pigv;

    /**
     * @var float
     *
     * @ORM\Column(name="saldo", type="float", precision=10, scale=2, nullable=true)
     */
    private $saldo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchpago", type="date", nullable=true)
     */
    private $fchpago;

    /**
     * @var string
     *
     * @ORM\Column(name="reg", type="string", length=3, nullable=true)
     */
    private $reg;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=6, nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="tiporig", type="string", length=1, nullable=true)
     */
    private $tiporig;

    /**
     * @var string
     *
     * @ORM\Column(name="corigen", type="string", length=4, nullable=true)
     */
    private $corigen;

    /**
     * @var string
     *
     * @ORM\Column(name="tipdes", type="string", length=1, nullable=true)
     */
    private $tipdes;

    /**
     * @var string
     *
     * @ORM\Column(name="crelacio", type="string", length=2, nullable=true)
     */
    private $crelacio;

    /**
     * @var string
     *
     * @ORM\Column(name="nrelacio", type="string", length=10, nullable=true)
     */
    private $nrelacio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vence", type="date", nullable=true)
     */
    private $vence;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * @var float
     *
     * @ORM\Column(name="pdescuen", type="float", precision=7, scale=2, nullable=true)
     */
    private $pdescuen;

    /**
     * @var string
     *
     * @ORM\Column(name="comprob", type="string", length=10, nullable=true)
     */
    private $comprob;

    /**
     * @var float
     *
     * @ORM\Column(name="tipcam", type="float", precision=10, scale=4, nullable=true)
     */
    private $tipcam;

    /**
     * @var string
     *
     * @ORM\Column(name="cgasto", type="string", length=3, nullable=true)
     */
    private $cgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="direcc", type="string", length=95, nullable=true)
     */
    private $direcc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tieneigv", type="boolean", nullable=true)
     */
    private $tieneigv;

    /**
     * @var string
     *
     * @ORM\Column(name="rubro", type="string", length=2, nullable=true)
     */
    private $rubro;

    /**
     * @var string
     *
     * @ORM\Column(name="tipopago", type="string", length=3, nullable=true)
     */
    private $tipopago;

    /**
     * @var string
     *
     * @ORM\Column(name="cbanco", type="string", length=2, nullable=true)
     */
    private $cbanco;

    /**
     * @var string
     *
     * @ORM\Column(name="ncuenta", type="string", length=30, nullable=true)
     */
    private $ncuenta;

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
     * @var integer
     *
     * @ORM\Column(name="dias", type="integer", nullable=true)
     */
    private $dias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="espec", type="boolean", nullable=true)
     */
    private $espec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pagopac", type="boolean", nullable=true)
     */
    private $pagopac;

    /**
     * @var float
     *
     * @ORM\Column(name="otropor", type="float", precision=10, scale=3, nullable=true)
     */
    private $otropor;

    /**
     * @var float
     *
     * @ORM\Column(name="dental", type="float", precision=10, scale=2, nullable=true)
     */
    private $dental;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=180, nullable=true)
     */
    private $observa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seguro", type="boolean", nullable=true)
     */
    private $seguro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="amb", type="string", length=2, nullable=true)
     */
    private $amb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="turno", type="boolean", nullable=true)
     */
    private $turno;

    /**
     * @var string
     *
     * @ORM\Column(name="actualiza", type="string", length=30, nullable=true)
     */
    private $actualiza;

    /**
     * @var string
     *
     * @ORM\Column(name="csede2", type="string", length=3, nullable=true)
     */
    private $csede2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vpag", type="boolean", nullable=true)
     */
    private $vpag;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico2", type="string", length=3, nullable=true)
     */
    private $cmedico2;

    /**
     * @var float
     *
     * @ORM\Column(name="totmed2", type="float", precision=10, scale=2, nullable=true)
     */
    private $totmed2;

    /**
     * @var string
     *
     * @ORM\Column(name="aten2", type="string", length=50, nullable=true)
     */
    private $aten2 = 'Control';

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico3", type="string", length=3, nullable=true)
     */
    private $cmedico3;

    /**
     * @var float
     *
     * @ORM\Column(name="totmed3", type="float", precision=10, scale=2, nullable=true)
     */
    private $totmed3;

    /**
     * @var string
     *
     * @ORM\Column(name="aten3", type="string", length=50, nullable=true)
     */
    private $aten3;

    /**
     * @var string
     *
     * @ORM\Column(name="amb2", type="string", length=2, nullable=true)
     */
    private $amb2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="turno2", type="boolean", nullable=true)
     */
    private $turno2;

    /**
     * @var string
     *
     * @ORM\Column(name="amb3", type="string", length=2, nullable=true)
     */
    private $amb3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="turno3", type="boolean", nullable=true)
     */
    private $turno3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechareal", type="date", nullable=true)
     */
    private $fechareal;

    /**
     * @var float
     *
     * @ORM\Column(name="totmed1", type="float", precision=10, scale=2, nullable=true)
     */
    private $totmed1;

    /**
     * @var string
     *
     * @ORM\Column(name="aten", type="string", length=30, nullable=true)
     */
    private $aten = 'Control';

    /**
     * @var float
     *
     * @ORM\Column(name="parcial", type="float", precision=10, scale=2, nullable=true)
     */
    private $parcial;

    /**
     * @var float
     *
     * @ORM\Column(name="deducible", type="float", precision=10, scale=2, nullable=true)
     */
    private $deducible;

    /**
     * @var float
     *
     * @ORM\Column(name="coaseguro", type="float", precision=10, scale=2, nullable=true)
     */
    private $coaseguro;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=70, nullable=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=80, nullable=true)
     */
    private $titular;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchrecibe", type="date", nullable=true)
     */
    private $fchrecibe;

    /**
     * @var string
     *
     * @ORM\Column(name="cmoneda2", type="string", length=1, nullable=true)
     */
    private $cmoneda2 = 'S';

    /**
     * @var float
     *
     * @ORM\Column(name="total2", type="float", precision=10, scale=2, nullable=true)
     */
    private $total2 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="cprov", type="string", length=4, nullable=true)
     */
    private $cprov = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mat", type="float", precision=10, scale=2, nullable=true)
     */
    private $mat = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pag1", type="boolean", nullable=true)
     */
    private $pag1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pag2", type="boolean", nullable=true)
     */
    private $pag2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pag3", type="boolean", nullable=true)
     */
    private $pag3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tigv", type="boolean", nullable=true)
     */
    private $tigv = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="deposito", type="boolean", nullable=true)
     */
    private $deposito = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchdepo", type="date", nullable=true)
     */
    private $fchdepo;

    /**
     * @var string
     *
     * @ORM\Column(name="recibo", type="string", length=80, nullable=true)
     */
    private $recibo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchdev", type="date", nullable=true)
     */
    private $fchdev;

    /**
     * @var string
     *
     * @ORM\Column(name="codubica", type="string", length=6, nullable=true)
     */
    private $codubica;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var boolean
     *
     * @ORM\Column(name="close", type="boolean", nullable=true)
     */
    private $close = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="distrito", type="string", length=90, nullable=true)
     */
    private $distrito;



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
     * Set cdocum
     *
     * @param string $cdocum
     *
     * @return Cmovim
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
     * @return Cmovim
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
     * Set serie
     *
     * @param string $serie
     *
     * @return Cmovim
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cmovim
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Cmovim
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
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Cmovim
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
     * Set razon
     *
     * @param string $razon
     *
     * @return Cmovim
     */
    public function setRazon($razon)
    {
        $this->razon = $razon;

        return $this;
    }

    /**
     * Get razon
     *
     * @return string
     */
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Cmovim
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
     * Set clipac
     *
     * @param boolean $clipac
     *
     * @return Cmovim
     */
    public function setClipac($clipac)
    {
        $this->clipac = $clipac;

        return $this;
    }

    /**
     * Get clipac
     *
     * @return boolean
     */
    public function getClipac()
    {
        return $this->clipac;
    }

    /**
     * Set cpac
     *
     * @param string $cpac
     *
     * @return Cmovim
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
     * Set paciente
     *
     * @param string $paciente
     *
     * @return Cmovim
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return string
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set dnipac
     *
     * @param string $dnipac
     *
     * @return Cmovim
     */
    public function setDnipac($dnipac)
    {
        $this->dnipac = $dnipac;

        return $this;
    }

    /**
     * Get dnipac
     *
     * @return string
     */
    public function getDnipac()
    {
        return $this->dnipac;
    }

    /**
     * Set noconta
     *
     * @param boolean $noconta
     *
     * @return Cmovim
     */
    public function setNoconta($noconta)
    {
        $this->noconta = $noconta;

        return $this;
    }

    /**
     * Get noconta
     *
     * @return boolean
     */
    public function getNoconta()
    {
        return $this->noconta;
    }

    /**
     * Set dirpac
     *
     * @param string $dirpac
     *
     * @return Cmovim
     */
    public function setDirpac($dirpac)
    {
        $this->dirpac = $dirpac;

        return $this;
    }

    /**
     * Get dirpac
     *
     * @return string
     */
    public function getDirpac()
    {
        return $this->dirpac;
    }

    /**
     * Set telpac
     *
     * @param string $telpac
     *
     * @return Cmovim
     */
    public function setTelpac($telpac)
    {
        $this->telpac = $telpac;

        return $this;
    }

    /**
     * Get telpac
     *
     * @return string
     */
    public function getTelpac()
    {
        return $this->telpac;
    }

    /**
     * Set emapac
     *
     * @param string $emapac
     *
     * @return Cmovim
     */
    public function setEmapac($emapac)
    {
        $this->emapac = $emapac;

        return $this;
    }

    /**
     * Get emapac
     *
     * @return string
     */
    public function getEmapac()
    {
        return $this->emapac;
    }

    /**
     * Set dispac
     *
     * @param string $dispac
     *
     * @return Cmovim
     */
    public function setDispac($dispac)
    {
        $this->dispac = $dispac;

        return $this;
    }

    /**
     * Get dispac
     *
     * @return string
     */
    public function getDispac()
    {
        return $this->dispac;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Cmovim
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
     * Set base
     *
     * @param float $base
     *
     * @return Cmovim
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set igv
     *
     * @param float $igv
     *
     * @return Cmovim
     */
    public function setIgv($igv)
    {
        $this->igv = $igv;

        return $this;
    }

    /**
     * Get igv
     *
     * @return float
     */
    public function getIgv()
    {
        return $this->igv;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Cmovim
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set laborat
     *
     * @param float $laborat
     *
     * @return Cmovim
     */
    public function setLaborat($laborat)
    {
        $this->laborat = $laborat;

        return $this;
    }

    /**
     * Get laborat
     *
     * @return float
     */
    public function getLaborat()
    {
        return $this->laborat;
    }

    /**
     * Set anombrede
     *
     * @param string $anombrede
     *
     * @return Cmovim
     */
    public function setAnombrede($anombrede)
    {
        $this->anombrede = $anombrede;

        return $this;
    }

    /**
     * Get anombrede
     *
     * @return string
     */
    public function getAnombrede()
    {
        return $this->anombrede;
    }

    /**
     * Set cdestino
     *
     * @param string $cdestino
     *
     * @return Cmovim
     */
    public function setCdestino($cdestino)
    {
        $this->cdestino = $cdestino;

        return $this;
    }

    /**
     * Get cdestino
     *
     * @return string
     */
    public function getCdestino()
    {
        return $this->cdestino;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Cmovim
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
     * Set casegura
     *
     * @param string $casegura
     *
     * @return Cmovim
     */
    public function setCasegura($casegura)
    {
        $this->casegura = $casegura;

        return $this;
    }

    /**
     * Get casegura
     *
     * @return string
     */
    public function getCasegura()
    {
        return $this->casegura;
    }

    /**
     * Set cempresa
     *
     * @param string $cempresa
     *
     * @return Cmovim
     */
    public function setCempresa($cempresa)
    {
        $this->cempresa = $cempresa;

        return $this;
    }

    /**
     * Get cempresa
     *
     * @return string
     */
    public function getCempresa()
    {
        return $this->cempresa;
    }

    /**
     * Set poliza
     *
     * @param string $poliza
     *
     * @return Cmovim
     */
    public function setPoliza($poliza)
    {
        $this->poliza = $poliza;

        return $this;
    }

    /**
     * Get poliza
     *
     * @return string
     */
    public function getPoliza()
    {
        return $this->poliza;
    }

    /**
     * Set tdocum
     *
     * @param string $tdocum
     *
     * @return Cmovim
     */
    public function setTdocum($tdocum)
    {
        $this->tdocum = $tdocum;

        return $this;
    }

    /**
     * Get tdocum
     *
     * @return string
     */
    public function getTdocum()
    {
        return $this->tdocum;
    }

    /**
     * Set cmoneda
     *
     * @param string $cmoneda
     *
     * @return Cmovim
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
     * Set pigv
     *
     * @param float $pigv
     *
     * @return Cmovim
     */
    public function setPigv($pigv)
    {
        $this->pigv = $pigv;

        return $this;
    }

    /**
     * Get pigv
     *
     * @return float
     */
    public function getPigv()
    {
        return $this->pigv;
    }

    /**
     * Set saldo
     *
     * @param float $saldo
     *
     * @return Cmovim
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return float
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set fchpago
     *
     * @param \DateTime $fchpago
     *
     * @return Cmovim
     */
    public function setFchpago($fchpago)
    {
        $this->fchpago = $fchpago;

        return $this;
    }

    /**
     * Get fchpago
     *
     * @return \DateTime
     */
    public function getFchpago()
    {
        return $this->fchpago;
    }

    /**
     * Set reg
     *
     * @param string $reg
     *
     * @return Cmovim
     */
    public function setReg($reg)
    {
        $this->reg = $reg;

        return $this;
    }

    /**
     * Get reg
     *
     * @return string
     */
    public function getReg()
    {
        return $this->reg;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     *
     * @return Cmovim
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set tiporig
     *
     * @param string $tiporig
     *
     * @return Cmovim
     */
    public function setTiporig($tiporig)
    {
        $this->tiporig = $tiporig;

        return $this;
    }

    /**
     * Get tiporig
     *
     * @return string
     */
    public function getTiporig()
    {
        return $this->tiporig;
    }

    /**
     * Set corigen
     *
     * @param string $corigen
     *
     * @return Cmovim
     */
    public function setCorigen($corigen)
    {
        $this->corigen = $corigen;

        return $this;
    }

    /**
     * Get corigen
     *
     * @return string
     */
    public function getCorigen()
    {
        return $this->corigen;
    }

    /**
     * Set tipdes
     *
     * @param string $tipdes
     *
     * @return Cmovim
     */
    public function setTipdes($tipdes)
    {
        $this->tipdes = $tipdes;

        return $this;
    }

    /**
     * Get tipdes
     *
     * @return string
     */
    public function getTipdes()
    {
        return $this->tipdes;
    }

    /**
     * Set crelacio
     *
     * @param string $crelacio
     *
     * @return Cmovim
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
     * @return Cmovim
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
     * Set vence
     *
     * @param \DateTime $vence
     *
     * @return Cmovim
     */
    public function setVence($vence)
    {
        $this->vence = $vence;

        return $this;
    }

    /**
     * Get vence
     *
     * @return \DateTime
     */
    public function getVence()
    {
        return $this->vence;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Cmovim
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
     * Set pdescuen
     *
     * @param float $pdescuen
     *
     * @return Cmovim
     */
    public function setPdescuen($pdescuen)
    {
        $this->pdescuen = $pdescuen;

        return $this;
    }

    /**
     * Get pdescuen
     *
     * @return float
     */
    public function getPdescuen()
    {
        return $this->pdescuen;
    }

    /**
     * Set comprob
     *
     * @param string $comprob
     *
     * @return Cmovim
     */
    public function setComprob($comprob)
    {
        $this->comprob = $comprob;

        return $this;
    }

    /**
     * Get comprob
     *
     * @return string
     */
    public function getComprob()
    {
        return $this->comprob;
    }

    /**
     * Set tipcam
     *
     * @param float $tipcam
     *
     * @return Cmovim
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
     * Set cgasto
     *
     * @param string $cgasto
     *
     * @return Cmovim
     */
    public function setCgasto($cgasto)
    {
        $this->cgasto = $cgasto;

        return $this;
    }

    /**
     * Get cgasto
     *
     * @return string
     */
    public function getCgasto()
    {
        return $this->cgasto;
    }

    /**
     * Set direcc
     *
     * @param string $direcc
     *
     * @return Cmovim
     */
    public function setDirecc($direcc)
    {
        $this->direcc = $direcc;

        return $this;
    }

    /**
     * Get direcc
     *
     * @return string
     */
    public function getDirecc()
    {
        return $this->direcc;
    }

    /**
     * Set tieneigv
     *
     * @param boolean $tieneigv
     *
     * @return Cmovim
     */
    public function setTieneigv($tieneigv)
    {
        $this->tieneigv = $tieneigv;

        return $this;
    }

    /**
     * Get tieneigv
     *
     * @return boolean
     */
    public function getTieneigv()
    {
        return $this->tieneigv;
    }

    /**
     * Set rubro
     *
     * @param string $rubro
     *
     * @return Cmovim
     */
    public function setRubro($rubro)
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * Get rubro
     *
     * @return string
     */
    public function getRubro()
    {
        return $this->rubro;
    }

    /**
     * Set tipopago
     *
     * @param string $tipopago
     *
     * @return Cmovim
     */
    public function setTipopago($tipopago)
    {
        $this->tipopago = $tipopago;

        return $this;
    }

    /**
     * Get tipopago
     *
     * @return string
     */
    public function getTipopago()
    {
        return $this->tipopago;
    }

    /**
     * Set cbanco
     *
     * @param string $cbanco
     *
     * @return Cmovim
     */
    public function setCbanco($cbanco)
    {
        $this->cbanco = $cbanco;

        return $this;
    }

    /**
     * Get cbanco
     *
     * @return string
     */
    public function getCbanco()
    {
        return $this->cbanco;
    }

    /**
     * Set ncuenta
     *
     * @param string $ncuenta
     *
     * @return Cmovim
     */
    public function setNcuenta($ncuenta)
    {
        $this->ncuenta = $ncuenta;

        return $this;
    }

    /**
     * Get ncuenta
     *
     * @return string
     */
    public function getNcuenta()
    {
        return $this->ncuenta;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Cmovim
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
     * @return Cmovim
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
     * @return Cmovim
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
     * Set dias
     *
     * @param integer $dias
     *
     * @return Cmovim
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set espec
     *
     * @param boolean $espec
     *
     * @return Cmovim
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

    /**
     * Set pagopac
     *
     * @param boolean $pagopac
     *
     * @return Cmovim
     */
    public function setPagopac($pagopac)
    {
        $this->pagopac = $pagopac;

        return $this;
    }

    /**
     * Get pagopac
     *
     * @return boolean
     */
    public function getPagopac()
    {
        return $this->pagopac;
    }

    /**
     * Set otropor
     *
     * @param float $otropor
     *
     * @return Cmovim
     */
    public function setOtropor($otropor)
    {
        $this->otropor = $otropor;

        return $this;
    }

    /**
     * Get otropor
     *
     * @return float
     */
    public function getOtropor()
    {
        return $this->otropor;
    }

    /**
     * Set dental
     *
     * @param float $dental
     *
     * @return Cmovim
     */
    public function setDental($dental)
    {
        $this->dental = $dental;

        return $this;
    }

    /**
     * Get dental
     *
     * @return float
     */
    public function getDental()
    {
        return $this->dental;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Cmovim
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
     * Set seguro
     *
     * @param boolean $seguro
     *
     * @return Cmovim
     */
    public function setSeguro($seguro)
    {
        $this->seguro = $seguro;

        return $this;
    }

    /**
     * Get seguro
     *
     * @return boolean
     */
    public function getSeguro()
    {
        return $this->seguro;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Cmovim
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set amb
     *
     * @param string $amb
     *
     * @return Cmovim
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
     * Set turno
     *
     * @param boolean $turno
     *
     * @return Cmovim
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return boolean
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set actualiza
     *
     * @param string $actualiza
     *
     * @return Cmovim
     */
    public function setActualiza($actualiza)
    {
        $this->actualiza = $actualiza;

        return $this;
    }

    /**
     * Get actualiza
     *
     * @return string
     */
    public function getActualiza()
    {
        return $this->actualiza;
    }

    /**
     * Set csede2
     *
     * @param string $csede2
     *
     * @return Cmovim
     */
    public function setCsede2($csede2)
    {
        $this->csede2 = $csede2;

        return $this;
    }

    /**
     * Get csede2
     *
     * @return string
     */
    public function getCsede2()
    {
        return $this->csede2;
    }

    /**
     * Set vpag
     *
     * @param boolean $vpag
     *
     * @return Cmovim
     */
    public function setVpag($vpag)
    {
        $this->vpag = $vpag;

        return $this;
    }

    /**
     * Get vpag
     *
     * @return boolean
     */
    public function getVpag()
    {
        return $this->vpag;
    }

    /**
     * Set cmedico2
     *
     * @param string $cmedico2
     *
     * @return Cmovim
     */
    public function setCmedico2($cmedico2)
    {
        $this->cmedico2 = $cmedico2;

        return $this;
    }

    /**
     * Get cmedico2
     *
     * @return string
     */
    public function getCmedico2()
    {
        return $this->cmedico2;
    }

    /**
     * Set totmed2
     *
     * @param float $totmed2
     *
     * @return Cmovim
     */
    public function setTotmed2($totmed2)
    {
        $this->totmed2 = $totmed2;

        return $this;
    }

    /**
     * Get totmed2
     *
     * @return float
     */
    public function getTotmed2()
    {
        return $this->totmed2;
    }

    /**
     * Set aten2
     *
     * @param string $aten2
     *
     * @return Cmovim
     */
    public function setAten2($aten2)
    {
        $this->aten2 = $aten2;

        return $this;
    }

    /**
     * Get aten2
     *
     * @return string
     */
    public function getAten2()
    {
        return $this->aten2;
    }

    /**
     * Set cmedico3
     *
     * @param string $cmedico3
     *
     * @return Cmovim
     */
    public function setCmedico3($cmedico3)
    {
        $this->cmedico3 = $cmedico3;

        return $this;
    }

    /**
     * Get cmedico3
     *
     * @return string
     */
    public function getCmedico3()
    {
        return $this->cmedico3;
    }

    /**
     * Set totmed3
     *
     * @param float $totmed3
     *
     * @return Cmovim
     */
    public function setTotmed3($totmed3)
    {
        $this->totmed3 = $totmed3;

        return $this;
    }

    /**
     * Get totmed3
     *
     * @return float
     */
    public function getTotmed3()
    {
        return $this->totmed3;
    }

    /**
     * Set aten3
     *
     * @param string $aten3
     *
     * @return Cmovim
     */
    public function setAten3($aten3)
    {
        $this->aten3 = $aten3;

        return $this;
    }

    /**
     * Get aten3
     *
     * @return string
     */
    public function getAten3()
    {
        return $this->aten3;
    }

    /**
     * Set amb2
     *
     * @param string $amb2
     *
     * @return Cmovim
     */
    public function setAmb2($amb2)
    {
        $this->amb2 = $amb2;

        return $this;
    }

    /**
     * Get amb2
     *
     * @return string
     */
    public function getAmb2()
    {
        return $this->amb2;
    }

    /**
     * Set turno2
     *
     * @param boolean $turno2
     *
     * @return Cmovim
     */
    public function setTurno2($turno2)
    {
        $this->turno2 = $turno2;

        return $this;
    }

    /**
     * Get turno2
     *
     * @return boolean
     */
    public function getTurno2()
    {
        return $this->turno2;
    }

    /**
     * Set amb3
     *
     * @param string $amb3
     *
     * @return Cmovim
     */
    public function setAmb3($amb3)
    {
        $this->amb3 = $amb3;

        return $this;
    }

    /**
     * Get amb3
     *
     * @return string
     */
    public function getAmb3()
    {
        return $this->amb3;
    }

    /**
     * Set turno3
     *
     * @param boolean $turno3
     *
     * @return Cmovim
     */
    public function setTurno3($turno3)
    {
        $this->turno3 = $turno3;

        return $this;
    }

    /**
     * Get turno3
     *
     * @return boolean
     */
    public function getTurno3()
    {
        return $this->turno3;
    }

    /**
     * Set fechareal
     *
     * @param \DateTime $fechareal
     *
     * @return Cmovim
     */
    public function setFechareal($fechareal)
    {
        $this->fechareal = $fechareal;

        return $this;
    }

    /**
     * Get fechareal
     *
     * @return \DateTime
     */
    public function getFechareal()
    {
        return $this->fechareal;
    }

    /**
     * Set totmed1
     *
     * @param float $totmed1
     *
     * @return Cmovim
     */
    public function setTotmed1($totmed1)
    {
        $this->totmed1 = $totmed1;

        return $this;
    }

    /**
     * Get totmed1
     *
     * @return float
     */
    public function getTotmed1()
    {
        return $this->totmed1;
    }

    /**
     * Set aten
     *
     * @param string $aten
     *
     * @return Cmovim
     */
    public function setAten($aten)
    {
        $this->aten = $aten;

        return $this;
    }

    /**
     * Get aten
     *
     * @return string
     */
    public function getAten()
    {
        return $this->aten;
    }

    /**
     * Set parcial
     *
     * @param float $parcial
     *
     * @return Cmovim
     */
    public function setParcial($parcial)
    {
        $this->parcial = $parcial;

        return $this;
    }

    /**
     * Get parcial
     *
     * @return float
     */
    public function getParcial()
    {
        return $this->parcial;
    }

    /**
     * Set deducible
     *
     * @param float $deducible
     *
     * @return Cmovim
     */
    public function setDeducible($deducible)
    {
        $this->deducible = $deducible;

        return $this;
    }

    /**
     * Get deducible
     *
     * @return float
     */
    public function getDeducible()
    {
        return $this->deducible;
    }

    /**
     * Set coaseguro
     *
     * @param float $coaseguro
     *
     * @return Cmovim
     */
    public function setCoaseguro($coaseguro)
    {
        $this->coaseguro = $coaseguro;

        return $this;
    }

    /**
     * Get coaseguro
     *
     * @return float
     */
    public function getCoaseguro()
    {
        return $this->coaseguro;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Cmovim
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set titular
     *
     * @param string $titular
     *
     * @return Cmovim
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set fchrecibe
     *
     * @param \DateTime $fchrecibe
     *
     * @return Cmovim
     */
    public function setFchrecibe($fchrecibe)
    {
        $this->fchrecibe = $fchrecibe;

        return $this;
    }

    /**
     * Get fchrecibe
     *
     * @return \DateTime
     */
    public function getFchrecibe()
    {
        return $this->fchrecibe;
    }

    /**
     * Set cmoneda2
     *
     * @param string $cmoneda2
     *
     * @return Cmovim
     */
    public function setCmoneda2($cmoneda2)
    {
        $this->cmoneda2 = $cmoneda2;

        return $this;
    }

    /**
     * Get cmoneda2
     *
     * @return string
     */
    public function getCmoneda2()
    {
        return $this->cmoneda2;
    }

    /**
     * Set total2
     *
     * @param float $total2
     *
     * @return Cmovim
     */
    public function setTotal2($total2)
    {
        $this->total2 = $total2;

        return $this;
    }

    /**
     * Get total2
     *
     * @return float
     */
    public function getTotal2()
    {
        return $this->total2;
    }

    /**
     * Set cprov
     *
     * @param string $cprov
     *
     * @return Cmovim
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
     * Set mat
     *
     * @param float $mat
     *
     * @return Cmovim
     */
    public function setMat($mat)
    {
        $this->mat = $mat;

        return $this;
    }

    /**
     * Get mat
     *
     * @return float
     */
    public function getMat()
    {
        return $this->mat;
    }

    /**
     * Set pag1
     *
     * @param boolean $pag1
     *
     * @return Cmovim
     */
    public function setPag1($pag1)
    {
        $this->pag1 = $pag1;

        return $this;
    }

    /**
     * Get pag1
     *
     * @return boolean
     */
    public function getPag1()
    {
        return $this->pag1;
    }

    /**
     * Set pag2
     *
     * @param boolean $pag2
     *
     * @return Cmovim
     */
    public function setPag2($pag2)
    {
        $this->pag2 = $pag2;

        return $this;
    }

    /**
     * Get pag2
     *
     * @return boolean
     */
    public function getPag2()
    {
        return $this->pag2;
    }

    /**
     * Set pag3
     *
     * @param boolean $pag3
     *
     * @return Cmovim
     */
    public function setPag3($pag3)
    {
        $this->pag3 = $pag3;

        return $this;
    }

    /**
     * Get pag3
     *
     * @return boolean
     */
    public function getPag3()
    {
        return $this->pag3;
    }

    /**
     * Set tigv
     *
     * @param boolean $tigv
     *
     * @return Cmovim
     */
    public function setTigv($tigv)
    {
        $this->tigv = $tigv;

        return $this;
    }

    /**
     * Get tigv
     *
     * @return boolean
     */
    public function getTigv()
    {
        return $this->tigv;
    }

    /**
     * Set deposito
     *
     * @param boolean $deposito
     *
     * @return Cmovim
     */
    public function setDeposito($deposito)
    {
        $this->deposito = $deposito;

        return $this;
    }

    /**
     * Get deposito
     *
     * @return boolean
     */
    public function getDeposito()
    {
        return $this->deposito;
    }

    /**
     * Set fchdepo
     *
     * @param \DateTime $fchdepo
     *
     * @return Cmovim
     */
    public function setFchdepo($fchdepo)
    {
        $this->fchdepo = $fchdepo;

        return $this;
    }

    /**
     * Get fchdepo
     *
     * @return \DateTime
     */
    public function getFchdepo()
    {
        return $this->fchdepo;
    }

    /**
     * Set recibo
     *
     * @param string $recibo
     *
     * @return Cmovim
     */
    public function setRecibo($recibo)
    {
        $this->recibo = $recibo;

        return $this;
    }

    /**
     * Get recibo
     *
     * @return string
     */
    public function getRecibo()
    {
        return $this->recibo;
    }

    /**
     * Set fchdev
     *
     * @param \DateTime $fchdev
     *
     * @return Cmovim
     */
    public function setFchdev($fchdev)
    {
        $this->fchdev = $fchdev;

        return $this;
    }

    /**
     * Get fchdev
     *
     * @return \DateTime
     */
    public function getFchdev()
    {
        return $this->fchdev;
    }

    /**
     * Set codubica
     *
     * @param string $codubica
     *
     * @return Cmovim
     */
    public function setCodubica($codubica)
    {
        $this->codubica = $codubica;

        return $this;
    }

    /**
     * Get codubica
     *
     * @return string
     */
    public function getCodubica()
    {
        return $this->codubica;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cmovim
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
     * Set close
     *
     * @param boolean $close
     *
     * @return Cmovim
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return boolean
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Set distrito
     *
     * @param string $distrito
     *
     * @return Cmovim
     */
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;

        return $this;
    }

    /**
     * Get distrito
     *
     * @return string
     */
    public function getDistrito()
    {
        return $this->distrito;
    }
}
