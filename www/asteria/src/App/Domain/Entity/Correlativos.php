<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correlativos
 *
 * @ORM\Table(name="correlativos")
 * @ORM\Entity
 */
class Correlativos
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
     * @var float
     *
     * @ORM\Column(name="clave", type="float", precision=10, scale=0, nullable=true)
     */
    private $clave = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="paciente", type="float", precision=10, scale=0, nullable=true)
     */
    private $paciente;

    /**
     * @var float
     *
     * @ORM\Column(name="asegura", type="float", precision=10, scale=0, nullable=true)
     */
    private $asegura;

    /**
     * @var float
     *
     * @ORM\Column(name="empresa", type="float", precision=10, scale=0, nullable=true)
     */
    private $empresa;

    /**
     * @var float
     *
     * @ORM\Column(name="recibo", type="float", precision=10, scale=0, nullable=true)
     */
    private $recibo;

    /**
     * @var float
     *
     * @ORM\Column(name="cliente", type="float", precision=10, scale=0, nullable=true)
     */
    private $cliente = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="proveedor", type="float", precision=10, scale=0, nullable=true)
     */
    private $proveedor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="servic", type="float", precision=10, scale=0, nullable=true)
     */
    private $servic = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="salida", type="float", precision=10, scale=0, nullable=true)
     */
    private $salida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="salidamed", type="float", precision=10, scale=0, nullable=true)
     */
    private $salidamed = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="salidaadm", type="float", precision=10, scale=0, nullable=true)
     */
    private $salidaadm = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="salidaasi", type="float", precision=10, scale=0, nullable=true)
     */
    private $salidaasi = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="personal", type="float", precision=10, scale=0, nullable=true)
     */
    private $personal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="apoyo", type="float", precision=10, scale=0, nullable=true)
     */
    private $apoyo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="asistente", type="float", precision=10, scale=0, nullable=true)
     */
    private $asistente = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rango1a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango1a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango1b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango1b = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango2a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango2a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango2b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango2b = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango3a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango3a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango3b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango3b = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango4a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango4a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango4b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango4b = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango5a", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango5a = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="rango5b", type="float", precision=10, scale=2, nullable=true)
     */
    private $rango5b = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="colegio", type="float", precision=10, scale=0, nullable=true)
     */
    private $colegio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $presup = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="gasto", type="float", precision=10, scale=0, nullable=true)
     */
    private $gasto;

    /**
     * @var float
     *
     * @ORM\Column(name="poradmin", type="float", precision=10, scale=2, nullable=true)
     */
    private $poradmin = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sedes", type="boolean", nullable=true)
     */
    private $sedes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mcard", type="boolean", nullable=true)
     */
    private $mcard = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="doctor", type="boolean", nullable=true)
     */
    private $doctor;

    /**
     * @var float
     *
     * @ORM\Column(name="atencion", type="float", precision=9, scale=2, nullable=true)
     */
    private $atencion = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="laborat", type="boolean", nullable=true)
     */
    private $laborat;

    /**
     * @var string
     *
     * @ORM\Column(name="entra1", type="string", length=5, nullable=true)
     */
    private $entra1 = '08:45';

    /**
     * @var string
     *
     * @ORM\Column(name="sale1", type="string", length=5, nullable=true)
     */
    private $sale1 = '13:00';

    /**
     * @var string
     *
     * @ORM\Column(name="entra2", type="string", length=5, nullable=true)
     */
    private $entra2 = '15:45';

    /**
     * @var string
     *
     * @ORM\Column(name="sale2", type="string", length=5, nullable=true)
     */
    private $sale2 = '20:30';

    /**
     * @var string
     *
     * @ORM\Column(name="pop", type="string", length=100, nullable=true)
     */
    private $pop;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=100, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="clavem", type="string", length=50, nullable=true)
     */
    private $clavem;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=220, nullable=true)
     */
    private $contenido;



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
     * Set clave
     *
     * @param float $clave
     *
     * @return Correlativos
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return float
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set paciente
     *
     * @param float $paciente
     *
     * @return Correlativos
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return float
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set asegura
     *
     * @param float $asegura
     *
     * @return Correlativos
     */
    public function setAsegura($asegura)
    {
        $this->asegura = $asegura;

        return $this;
    }

    /**
     * Get asegura
     *
     * @return float
     */
    public function getAsegura()
    {
        return $this->asegura;
    }

    /**
     * Set empresa
     *
     * @param float $empresa
     *
     * @return Correlativos
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return float
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set recibo
     *
     * @param float $recibo
     *
     * @return Correlativos
     */
    public function setRecibo($recibo)
    {
        $this->recibo = $recibo;

        return $this;
    }

    /**
     * Get recibo
     *
     * @return float
     */
    public function getRecibo()
    {
        return $this->recibo;
    }

    /**
     * Set cliente
     *
     * @param float $cliente
     *
     * @return Correlativos
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return float
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set proveedor
     *
     * @param float $proveedor
     *
     * @return Correlativos
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return float
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set servic
     *
     * @param float $servic
     *
     * @return Correlativos
     */
    public function setServic($servic)
    {
        $this->servic = $servic;

        return $this;
    }

    /**
     * Get servic
     *
     * @return float
     */
    public function getServic()
    {
        return $this->servic;
    }

    /**
     * Set salida
     *
     * @param float $salida
     *
     * @return Correlativos
     */
    public function setSalida($salida)
    {
        $this->salida = $salida;

        return $this;
    }

    /**
     * Get salida
     *
     * @return float
     */
    public function getSalida()
    {
        return $this->salida;
    }

    /**
     * Set salidamed
     *
     * @param float $salidamed
     *
     * @return Correlativos
     */
    public function setSalidamed($salidamed)
    {
        $this->salidamed = $salidamed;

        return $this;
    }

    /**
     * Get salidamed
     *
     * @return float
     */
    public function getSalidamed()
    {
        return $this->salidamed;
    }

    /**
     * Set salidaadm
     *
     * @param float $salidaadm
     *
     * @return Correlativos
     */
    public function setSalidaadm($salidaadm)
    {
        $this->salidaadm = $salidaadm;

        return $this;
    }

    /**
     * Get salidaadm
     *
     * @return float
     */
    public function getSalidaadm()
    {
        return $this->salidaadm;
    }

    /**
     * Set salidaasi
     *
     * @param float $salidaasi
     *
     * @return Correlativos
     */
    public function setSalidaasi($salidaasi)
    {
        $this->salidaasi = $salidaasi;

        return $this;
    }

    /**
     * Get salidaasi
     *
     * @return float
     */
    public function getSalidaasi()
    {
        return $this->salidaasi;
    }

    /**
     * Set personal
     *
     * @param float $personal
     *
     * @return Correlativos
     */
    public function setPersonal($personal)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return float
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set apoyo
     *
     * @param float $apoyo
     *
     * @return Correlativos
     */
    public function setApoyo($apoyo)
    {
        $this->apoyo = $apoyo;

        return $this;
    }

    /**
     * Get apoyo
     *
     * @return float
     */
    public function getApoyo()
    {
        return $this->apoyo;
    }

    /**
     * Set asistente
     *
     * @param float $asistente
     *
     * @return Correlativos
     */
    public function setAsistente($asistente)
    {
        $this->asistente = $asistente;

        return $this;
    }

    /**
     * Get asistente
     *
     * @return float
     */
    public function getAsistente()
    {
        return $this->asistente;
    }

    /**
     * Set rango1a
     *
     * @param float $rango1a
     *
     * @return Correlativos
     */
    public function setRango1a($rango1a)
    {
        $this->rango1a = $rango1a;

        return $this;
    }

    /**
     * Get rango1a
     *
     * @return float
     */
    public function getRango1a()
    {
        return $this->rango1a;
    }

    /**
     * Set rango1b
     *
     * @param float $rango1b
     *
     * @return Correlativos
     */
    public function setRango1b($rango1b)
    {
        $this->rango1b = $rango1b;

        return $this;
    }

    /**
     * Get rango1b
     *
     * @return float
     */
    public function getRango1b()
    {
        return $this->rango1b;
    }

    /**
     * Set rango2a
     *
     * @param float $rango2a
     *
     * @return Correlativos
     */
    public function setRango2a($rango2a)
    {
        $this->rango2a = $rango2a;

        return $this;
    }

    /**
     * Get rango2a
     *
     * @return float
     */
    public function getRango2a()
    {
        return $this->rango2a;
    }

    /**
     * Set rango2b
     *
     * @param float $rango2b
     *
     * @return Correlativos
     */
    public function setRango2b($rango2b)
    {
        $this->rango2b = $rango2b;

        return $this;
    }

    /**
     * Get rango2b
     *
     * @return float
     */
    public function getRango2b()
    {
        return $this->rango2b;
    }

    /**
     * Set rango3a
     *
     * @param float $rango3a
     *
     * @return Correlativos
     */
    public function setRango3a($rango3a)
    {
        $this->rango3a = $rango3a;

        return $this;
    }

    /**
     * Get rango3a
     *
     * @return float
     */
    public function getRango3a()
    {
        return $this->rango3a;
    }

    /**
     * Set rango3b
     *
     * @param float $rango3b
     *
     * @return Correlativos
     */
    public function setRango3b($rango3b)
    {
        $this->rango3b = $rango3b;

        return $this;
    }

    /**
     * Get rango3b
     *
     * @return float
     */
    public function getRango3b()
    {
        return $this->rango3b;
    }

    /**
     * Set rango4a
     *
     * @param float $rango4a
     *
     * @return Correlativos
     */
    public function setRango4a($rango4a)
    {
        $this->rango4a = $rango4a;

        return $this;
    }

    /**
     * Get rango4a
     *
     * @return float
     */
    public function getRango4a()
    {
        return $this->rango4a;
    }

    /**
     * Set rango4b
     *
     * @param float $rango4b
     *
     * @return Correlativos
     */
    public function setRango4b($rango4b)
    {
        $this->rango4b = $rango4b;

        return $this;
    }

    /**
     * Get rango4b
     *
     * @return float
     */
    public function getRango4b()
    {
        return $this->rango4b;
    }

    /**
     * Set rango5a
     *
     * @param float $rango5a
     *
     * @return Correlativos
     */
    public function setRango5a($rango5a)
    {
        $this->rango5a = $rango5a;

        return $this;
    }

    /**
     * Get rango5a
     *
     * @return float
     */
    public function getRango5a()
    {
        return $this->rango5a;
    }

    /**
     * Set rango5b
     *
     * @param float $rango5b
     *
     * @return Correlativos
     */
    public function setRango5b($rango5b)
    {
        $this->rango5b = $rango5b;

        return $this;
    }

    /**
     * Get rango5b
     *
     * @return float
     */
    public function getRango5b()
    {
        return $this->rango5b;
    }

    /**
     * Set colegio
     *
     * @param float $colegio
     *
     * @return Correlativos
     */
    public function setColegio($colegio)
    {
        $this->colegio = $colegio;

        return $this;
    }

    /**
     * Get colegio
     *
     * @return float
     */
    public function getColegio()
    {
        return $this->colegio;
    }

    /**
     * Set presup
     *
     * @param float $presup
     *
     * @return Correlativos
     */
    public function setPresup($presup)
    {
        $this->presup = $presup;

        return $this;
    }

    /**
     * Get presup
     *
     * @return float
     */
    public function getPresup()
    {
        return $this->presup;
    }

    /**
     * Set gasto
     *
     * @param float $gasto
     *
     * @return Correlativos
     */
    public function setGasto($gasto)
    {
        $this->gasto = $gasto;

        return $this;
    }

    /**
     * Get gasto
     *
     * @return float
     */
    public function getGasto()
    {
        return $this->gasto;
    }

    /**
     * Set poradmin
     *
     * @param float $poradmin
     *
     * @return Correlativos
     */
    public function setPoradmin($poradmin)
    {
        $this->poradmin = $poradmin;

        return $this;
    }

    /**
     * Get poradmin
     *
     * @return float
     */
    public function getPoradmin()
    {
        return $this->poradmin;
    }

    /**
     * Set sedes
     *
     * @param boolean $sedes
     *
     * @return Correlativos
     */
    public function setSedes($sedes)
    {
        $this->sedes = $sedes;

        return $this;
    }

    /**
     * Get sedes
     *
     * @return boolean
     */
    public function getSedes()
    {
        return $this->sedes;
    }

    /**
     * Set mcard
     *
     * @param boolean $mcard
     *
     * @return Correlativos
     */
    public function setMcard($mcard)
    {
        $this->mcard = $mcard;

        return $this;
    }

    /**
     * Get mcard
     *
     * @return boolean
     */
    public function getMcard()
    {
        return $this->mcard;
    }

    /**
     * Set doctor
     *
     * @param boolean $doctor
     *
     * @return Correlativos
     */
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return boolean
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * Set atencion
     *
     * @param float $atencion
     *
     * @return Correlativos
     */
    public function setAtencion($atencion)
    {
        $this->atencion = $atencion;

        return $this;
    }

    /**
     * Get atencion
     *
     * @return float
     */
    public function getAtencion()
    {
        return $this->atencion;
    }

    /**
     * Set laborat
     *
     * @param boolean $laborat
     *
     * @return Correlativos
     */
    public function setLaborat($laborat)
    {
        $this->laborat = $laborat;

        return $this;
    }

    /**
     * Get laborat
     *
     * @return boolean
     */
    public function getLaborat()
    {
        return $this->laborat;
    }

    /**
     * Set entra1
     *
     * @param string $entra1
     *
     * @return Correlativos
     */
    public function setEntra1($entra1)
    {
        $this->entra1 = $entra1;

        return $this;
    }

    /**
     * Get entra1
     *
     * @return string
     */
    public function getEntra1()
    {
        return $this->entra1;
    }

    /**
     * Set sale1
     *
     * @param string $sale1
     *
     * @return Correlativos
     */
    public function setSale1($sale1)
    {
        $this->sale1 = $sale1;

        return $this;
    }

    /**
     * Get sale1
     *
     * @return string
     */
    public function getSale1()
    {
        return $this->sale1;
    }

    /**
     * Set entra2
     *
     * @param string $entra2
     *
     * @return Correlativos
     */
    public function setEntra2($entra2)
    {
        $this->entra2 = $entra2;

        return $this;
    }

    /**
     * Get entra2
     *
     * @return string
     */
    public function getEntra2()
    {
        return $this->entra2;
    }

    /**
     * Set sale2
     *
     * @param string $sale2
     *
     * @return Correlativos
     */
    public function setSale2($sale2)
    {
        $this->sale2 = $sale2;

        return $this;
    }

    /**
     * Get sale2
     *
     * @return string
     */
    public function getSale2()
    {
        return $this->sale2;
    }

    /**
     * Set pop
     *
     * @param string $pop
     *
     * @return Correlativos
     */
    public function setPop($pop)
    {
        $this->pop = $pop;

        return $this;
    }

    /**
     * Get pop
     *
     * @return string
     */
    public function getPop()
    {
        return $this->pop;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Correlativos
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set clavem
     *
     * @param string $clavem
     *
     * @return Correlativos
     */
    public function setClavem($clavem)
    {
        $this->clavem = $clavem;

        return $this;
    }

    /**
     * Get clavem
     *
     * @return string
     */
    public function getClavem()
    {
        return $this->clavem;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Correlativos
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }
}
