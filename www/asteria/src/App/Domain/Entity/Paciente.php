<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente", indexes={@ORM\Index(name="cpac", columns={"cpac"}), @ORM\Index(name="ruc", columns={"ruc"})})
 * @ORM\Entity
 */
class Paciente
{
    /**
     * @var string
     *
     * @ORM\Column(name="cpac", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpac = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=true)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=11, nullable=true)
     */
    private $dni = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede;

    /**
     * @var string
     *
     * @ORM\Column(name="xpaciente", type="string", length=50, nullable=true)
     */
    private $xpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=80, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechanace", type="date", nullable=true)
     */
    private $fechanace;

    /**
     * @var string
     *
     * @ORM\Column(name="apepaterno", type="string", length=30, nullable=true)
     */
    private $apepaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apematerno", type="string", length=30, nullable=true)
     */
    private $apematerno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=30, nullable=true)
     */
    private $nombres;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="codubigeo", type="string", length=6, nullable=true)
     */
    private $codubigeo;

    /**
     * @var string
     *
     * @ORM\Column(name="apodera", type="string", length=35, nullable=true)
     */
    private $apodera;

    /**
     * @var string
     *
     * @ORM\Column(name="parenapo", type="string", length=30, nullable=true)
     */
    private $parenapo;

    /**
     * @var string
     *
     * @ORM\Column(name="paternidad", type="string", length=1, nullable=true)
     */
    private $paternidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fingreso", type="date", nullable=true)
     */
    private $fingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpostal", type="string", length=8, nullable=true)
     */
    private $cpostal;

    /**
     * @var string
     *
     * @ORM\Column(name="edocivil", type="string", length=1, nullable=true)
     */
    private $edocivil;

    /**
     * @var string
     *
     * @ORM\Column(name="ctrabajo", type="string", length=30, nullable=true)
     */
    private $ctrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="telftrabaj", type="string", length=15, nullable=true)
     */
    private $telftrabaj;

    /**
     * @var string
     *
     * @ORM\Column(name="cestudio", type="string", length=30, nullable=true)
     */
    private $cestudio;

    /**
     * @var string
     *
     * @ORM\Column(name="asegurado", type="string", length=1, nullable=true)
     */
    private $asegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="referido", type="string", length=30, nullable=true)
     */
    private $referido;

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
     * @ORM\Column(name="poliza", type="string", length=10, nullable=true)
     */
    private $poliza;

    /**
     * @var string
     *
     * @ORM\Column(name="bancos", type="string", length=50, nullable=true)
     */
    private $bancos;

    /**
     * @var string
     *
     * @ORM\Column(name="tcredito", type="string", length=30, nullable=true)
     */
    private $tcredito;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=500, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = 'A';

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var string
     *
     * @ORM\Column(name="medcon", type="string", length=40, nullable=true)
     */
    private $medcon;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=40, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="ambulan", type="string", length=40, nullable=true)
     */
    private $ambulan;

    /**
     * @var string
     *
     * @ORM\Column(name="teleeme", type="string", length=15, nullable=true)
     */
    private $teleeme;

    /**
     * @var string
     *
     * @ORM\Column(name="alergia", type="string", length=60, nullable=true)
     */
    private $alergia;

    /**
     * @var string
     *
     * @ORM\Column(name="medica", type="string", length=40, nullable=true)
     */
    private $medica;

    /**
     * @var string
     *
     * @ORM\Column(name="xmedico", type="string", length=30, nullable=true)
     */
    private $xmedico;

    /**
     * @var string
     *
     * @ORM\Column(name="telmed", type="string", length=15, nullable=true)
     */
    private $telmed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hepa", type="boolean", nullable=true)
     */
    private $hepa;

    /**
     * @var string
     *
     * @ORM\Column(name="tipohepa", type="string", length=1, nullable=true)
     */
    private $tipohepa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="diabet", type="boolean", nullable=true)
     */
    private $diabet;

    /**
     * @var string
     *
     * @ORM\Column(name="diabcom", type="string", length=10, nullable=true)
     */
    private $diabcom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presion", type="boolean", nullable=true)
     */
    private $presion;

    /**
     * @var string
     *
     * @ORM\Column(name="enfactual", type="string", length=300, nullable=true)
     */
    private $enfactual;

    /**
     * @var string
     *
     * @ORM\Column(name="frecden", type="string", length=15, nullable=true)
     */
    private $frecden;

    /**
     * @var string
     *
     * @ORM\Column(name="experien", type="string", length=300, nullable=true)
     */
    private $experien;

    /**
     * @var string
     *
     * @ORM\Column(name="extrae", type="string", length=20, nullable=true)
     */
    private $extrae;

    /**
     * @var string
     *
     * @ORM\Column(name="complica", type="string", length=35, nullable=true)
     */
    private $complica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sangra", type="boolean", nullable=true)
     */
    private $sangra;

    /**
     * @var string
     *
     * @ORM\Column(name="fchprofi", type="string", length=10, nullable=true)
     */
    private $fchprofi;

    /**
     * @var string
     *
     * @ORM\Column(name="ruidos", type="string", length=35, nullable=true)
     */
    private $ruidos;

    /**
     * @var string
     *
     * @ORM\Column(name="satisfecho", type="string", length=4, nullable=true)
     */
    private $satisfecho;

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
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=40, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="conoce", type="string", length=3, nullable=true)
     */
    private $conoce;

    /**
     * @var string
     *
     * @ORM\Column(name="refer", type="string", length=3, nullable=true)
     */
    private $refer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="canje", type="boolean", nullable=true)
     */
    private $canje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchultvis", type="date", nullable=true)
     */
    private $fchultvis;

    /**
     * @var string
     *
     * @ORM\Column(name="edo", type="string", length=1, nullable=true)
     */
    private $edo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpais", type="string", length=3, nullable=true)
     */
    private $cpais;

    /**
     * @var string
     *
     * @ORM\Column(name="lugproc", type="string", length=60, nullable=true)
     */
    private $lugproc = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="lugnace", type="string", length=50, nullable=true)
     */
    private $lugnace = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="mcard", type="string", length=20, nullable=true)
     */
    private $mcard = '0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencemcard", type="date", nullable=true)
     */
    private $vencemcard;

    /**
     * @var string
     *
     * @ORM\Column(name="enfermedad", type="text", length=65535, nullable=true)
     */
    private $enfermedad;

    /**
     * @var string
     *
     * @ORM\Column(name="alergias", type="text", length=65535, nullable=true)
     */
    private $alergias;

    /**
     * @var string
     *
     * @ORM\Column(name="hispsi", type="text", length=65535, nullable=true)
     */
    private $hispsi;

    /**
     * @var string
     *
     * @ORM\Column(name="familiar", type="text", length=65535, nullable=true)
     */
    private $familiar;

    /**
     * @var string
     *
     * @ORM\Column(name="biopsico", type="text", length=65535, nullable=true)
     */
    private $biopsico;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="text", length=65535, nullable=true)
     */
    private $diagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="tratamiento", type="text", length=65535, nullable=true)
     */
    private $tratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="alta", type="text", length=65535, nullable=true)
     */
    private $alta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aler", type="boolean", nullable=true)
     */
    private $aler = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xaler", type="string", length=100, nullable=true)
     */
    private $xaler;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alernin", type="boolean", nullable=true)
     */
    private $alernin = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notalta", type="text", length=65535, nullable=true)
     */
    private $notalta;

    /**
     * @var float
     *
     * @ORM\Column(name="meses", type="float", precision=4, scale=0, nullable=true)
     */
    private $meses = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipoalta", type="boolean", nullable=true)
     */
    private $tipoalta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="otros", type="string", length=100, nullable=true)
     */
    private $otros = '.';

    /**
     * @var string
     *
     * @ORM\Column(name="teleme", type="string", length=50, nullable=true)
     */
    private $teleme = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alernini", type="string", length=60, nullable=true)
     */
    private $alernini;

    /**
     * @var string
     *
     * @ORM\Column(name="tipalta", type="string", length=3, nullable=true)
     */
    private $tipalta;

    /**
     * @var string
     *
     * @ORM\Column(name="historia", type="string", length=10, nullable=true)
     */
    private $historia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vip", type="boolean", nullable=true)
     */
    private $vip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchcrea", type="date", nullable=true)
     */
    private $fchcrea;

    /**
     * @var string
     *
     * @ORM\Column(name="tipop", type="string", length=1, nullable=true)
     */
    private $tipop;



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
     * Set ruc
     *
     * @param string $ruc
     *
     * @return Paciente
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
     * Set dni
     *
     * @param string $dni
     *
     * @return Paciente
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
     * Set csede
     *
     * @param string $csede
     *
     * @return Paciente
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
     * Set xpaciente
     *
     * @param string $xpaciente
     *
     * @return Paciente
     */
    public function setXpaciente($xpaciente)
    {
        $this->xpaciente = $xpaciente;

        return $this;
    }

    /**
     * Get xpaciente
     *
     * @return string
     */
    public function getXpaciente()
    {
        return $this->xpaciente;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Paciente
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Paciente
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
     * Set celular
     *
     * @param string $celular
     *
     * @return Paciente
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Paciente
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
     * Set fechanace
     *
     * @param \DateTime $fechanace
     *
     * @return Paciente
     */
    public function setFechanace($fechanace)
    {
        $this->fechanace = $fechanace;

        return $this;
    }

    /**
     * Get fechanace
     *
     * @return \DateTime
     */
    public function getFechanace()
    {
        return $this->fechanace;
    }

    /**
     * Set apepaterno
     *
     * @param string $apepaterno
     *
     * @return Paciente
     */
    public function setApepaterno($apepaterno)
    {
        $this->apepaterno = $apepaterno;

        return $this;
    }

    /**
     * Get apepaterno
     *
     * @return string
     */
    public function getApepaterno()
    {
        return $this->apepaterno;
    }

    /**
     * Set apematerno
     *
     * @param string $apematerno
     *
     * @return Paciente
     */
    public function setApematerno($apematerno)
    {
        $this->apematerno = $apematerno;

        return $this;
    }

    /**
     * Get apematerno
     *
     * @return string
     */
    public function getApematerno()
    {
        return $this->apematerno;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Paciente
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Paciente
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set codubigeo
     *
     * @param string $codubigeo
     *
     * @return Paciente
     */
    public function setCodubigeo($codubigeo)
    {
        $this->codubigeo = $codubigeo;

        return $this;
    }

    /**
     * Get codubigeo
     *
     * @return string
     */
    public function getCodubigeo()
    {
        return $this->codubigeo;
    }

    /**
     * Set apodera
     *
     * @param string $apodera
     *
     * @return Paciente
     */
    public function setApodera($apodera)
    {
        $this->apodera = $apodera;

        return $this;
    }

    /**
     * Get apodera
     *
     * @return string
     */
    public function getApodera()
    {
        return $this->apodera;
    }

    /**
     * Set parenapo
     *
     * @param string $parenapo
     *
     * @return Paciente
     */
    public function setParenapo($parenapo)
    {
        $this->parenapo = $parenapo;

        return $this;
    }

    /**
     * Get parenapo
     *
     * @return string
     */
    public function getParenapo()
    {
        return $this->parenapo;
    }

    /**
     * Set paternidad
     *
     * @param string $paternidad
     *
     * @return Paciente
     */
    public function setPaternidad($paternidad)
    {
        $this->paternidad = $paternidad;

        return $this;
    }

    /**
     * Get paternidad
     *
     * @return string
     */
    public function getPaternidad()
    {
        return $this->paternidad;
    }

    /**
     * Set fingreso
     *
     * @param \DateTime $fingreso
     *
     * @return Paciente
     */
    public function setFingreso($fingreso)
    {
        $this->fingreso = $fingreso;

        return $this;
    }

    /**
     * Get fingreso
     *
     * @return \DateTime
     */
    public function getFingreso()
    {
        return $this->fingreso;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Paciente
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
     * Set cpostal
     *
     * @param string $cpostal
     *
     * @return Paciente
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * Set edocivil
     *
     * @param string $edocivil
     *
     * @return Paciente
     */
    public function setEdocivil($edocivil)
    {
        $this->edocivil = $edocivil;

        return $this;
    }

    /**
     * Get edocivil
     *
     * @return string
     */
    public function getEdocivil()
    {
        return $this->edocivil;
    }

    /**
     * Set ctrabajo
     *
     * @param string $ctrabajo
     *
     * @return Paciente
     */
    public function setCtrabajo($ctrabajo)
    {
        $this->ctrabajo = $ctrabajo;

        return $this;
    }

    /**
     * Get ctrabajo
     *
     * @return string
     */
    public function getCtrabajo()
    {
        return $this->ctrabajo;
    }

    /**
     * Set telftrabaj
     *
     * @param string $telftrabaj
     *
     * @return Paciente
     */
    public function setTelftrabaj($telftrabaj)
    {
        $this->telftrabaj = $telftrabaj;

        return $this;
    }

    /**
     * Get telftrabaj
     *
     * @return string
     */
    public function getTelftrabaj()
    {
        return $this->telftrabaj;
    }

    /**
     * Set cestudio
     *
     * @param string $cestudio
     *
     * @return Paciente
     */
    public function setCestudio($cestudio)
    {
        $this->cestudio = $cestudio;

        return $this;
    }

    /**
     * Get cestudio
     *
     * @return string
     */
    public function getCestudio()
    {
        return $this->cestudio;
    }

    /**
     * Set asegurado
     *
     * @param string $asegurado
     *
     * @return Paciente
     */
    public function setAsegurado($asegurado)
    {
        $this->asegurado = $asegurado;

        return $this;
    }

    /**
     * Get asegurado
     *
     * @return string
     */
    public function getAsegurado()
    {
        return $this->asegurado;
    }

    /**
     * Set referido
     *
     * @param string $referido
     *
     * @return Paciente
     */
    public function setReferido($referido)
    {
        $this->referido = $referido;

        return $this;
    }

    /**
     * Get referido
     *
     * @return string
     */
    public function getReferido()
    {
        return $this->referido;
    }

    /**
     * Set casegura
     *
     * @param string $casegura
     *
     * @return Paciente
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
     * @return Paciente
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
     * @return Paciente
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
     * Set bancos
     *
     * @param string $bancos
     *
     * @return Paciente
     */
    public function setBancos($bancos)
    {
        $this->bancos = $bancos;

        return $this;
    }

    /**
     * Get bancos
     *
     * @return string
     */
    public function getBancos()
    {
        return $this->bancos;
    }

    /**
     * Set tcredito
     *
     * @param string $tcredito
     *
     * @return Paciente
     */
    public function setTcredito($tcredito)
    {
        $this->tcredito = $tcredito;

        return $this;
    }

    /**
     * Get tcredito
     *
     * @return string
     */
    public function getTcredito()
    {
        return $this->tcredito;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Paciente
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
     * @return Paciente
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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Paciente
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
     * Set medcon
     *
     * @param string $medcon
     *
     * @return Paciente
     */
    public function setMedcon($medcon)
    {
        $this->medcon = $medcon;

        return $this;
    }

    /**
     * Get medcon
     *
     * @return string
     */
    public function getMedcon()
    {
        return $this->medcon;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Paciente
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set ambulan
     *
     * @param string $ambulan
     *
     * @return Paciente
     */
    public function setAmbulan($ambulan)
    {
        $this->ambulan = $ambulan;

        return $this;
    }

    /**
     * Get ambulan
     *
     * @return string
     */
    public function getAmbulan()
    {
        return $this->ambulan;
    }

    /**
     * Set teleeme
     *
     * @param string $teleeme
     *
     * @return Paciente
     */
    public function setTeleeme($teleeme)
    {
        $this->teleeme = $teleeme;

        return $this;
    }

    /**
     * Get teleeme
     *
     * @return string
     */
    public function getTeleeme()
    {
        return $this->teleeme;
    }

    /**
     * Set alergia
     *
     * @param string $alergia
     *
     * @return Paciente
     */
    public function setAlergia($alergia)
    {
        $this->alergia = $alergia;

        return $this;
    }

    /**
     * Get alergia
     *
     * @return string
     */
    public function getAlergia()
    {
        return $this->alergia;
    }

    /**
     * Set medica
     *
     * @param string $medica
     *
     * @return Paciente
     */
    public function setMedica($medica)
    {
        $this->medica = $medica;

        return $this;
    }

    /**
     * Get medica
     *
     * @return string
     */
    public function getMedica()
    {
        return $this->medica;
    }

    /**
     * Set xmedico
     *
     * @param string $xmedico
     *
     * @return Paciente
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
     * Set telmed
     *
     * @param string $telmed
     *
     * @return Paciente
     */
    public function setTelmed($telmed)
    {
        $this->telmed = $telmed;

        return $this;
    }

    /**
     * Get telmed
     *
     * @return string
     */
    public function getTelmed()
    {
        return $this->telmed;
    }

    /**
     * Set hepa
     *
     * @param boolean $hepa
     *
     * @return Paciente
     */
    public function setHepa($hepa)
    {
        $this->hepa = $hepa;

        return $this;
    }

    /**
     * Get hepa
     *
     * @return boolean
     */
    public function getHepa()
    {
        return $this->hepa;
    }

    /**
     * Set tipohepa
     *
     * @param string $tipohepa
     *
     * @return Paciente
     */
    public function setTipohepa($tipohepa)
    {
        $this->tipohepa = $tipohepa;

        return $this;
    }

    /**
     * Get tipohepa
     *
     * @return string
     */
    public function getTipohepa()
    {
        return $this->tipohepa;
    }

    /**
     * Set diabet
     *
     * @param boolean $diabet
     *
     * @return Paciente
     */
    public function setDiabet($diabet)
    {
        $this->diabet = $diabet;

        return $this;
    }

    /**
     * Get diabet
     *
     * @return boolean
     */
    public function getDiabet()
    {
        return $this->diabet;
    }

    /**
     * Set diabcom
     *
     * @param string $diabcom
     *
     * @return Paciente
     */
    public function setDiabcom($diabcom)
    {
        $this->diabcom = $diabcom;

        return $this;
    }

    /**
     * Get diabcom
     *
     * @return string
     */
    public function getDiabcom()
    {
        return $this->diabcom;
    }

    /**
     * Set presion
     *
     * @param boolean $presion
     *
     * @return Paciente
     */
    public function setPresion($presion)
    {
        $this->presion = $presion;

        return $this;
    }

    /**
     * Get presion
     *
     * @return boolean
     */
    public function getPresion()
    {
        return $this->presion;
    }

    /**
     * Set enfactual
     *
     * @param string $enfactual
     *
     * @return Paciente
     */
    public function setEnfactual($enfactual)
    {
        $this->enfactual = $enfactual;

        return $this;
    }

    /**
     * Get enfactual
     *
     * @return string
     */
    public function getEnfactual()
    {
        return $this->enfactual;
    }

    /**
     * Set frecden
     *
     * @param string $frecden
     *
     * @return Paciente
     */
    public function setFrecden($frecden)
    {
        $this->frecden = $frecden;

        return $this;
    }

    /**
     * Get frecden
     *
     * @return string
     */
    public function getFrecden()
    {
        return $this->frecden;
    }

    /**
     * Set experien
     *
     * @param string $experien
     *
     * @return Paciente
     */
    public function setExperien($experien)
    {
        $this->experien = $experien;

        return $this;
    }

    /**
     * Get experien
     *
     * @return string
     */
    public function getExperien()
    {
        return $this->experien;
    }

    /**
     * Set extrae
     *
     * @param string $extrae
     *
     * @return Paciente
     */
    public function setExtrae($extrae)
    {
        $this->extrae = $extrae;

        return $this;
    }

    /**
     * Get extrae
     *
     * @return string
     */
    public function getExtrae()
    {
        return $this->extrae;
    }

    /**
     * Set complica
     *
     * @param string $complica
     *
     * @return Paciente
     */
    public function setComplica($complica)
    {
        $this->complica = $complica;

        return $this;
    }

    /**
     * Get complica
     *
     * @return string
     */
    public function getComplica()
    {
        return $this->complica;
    }

    /**
     * Set sangra
     *
     * @param boolean $sangra
     *
     * @return Paciente
     */
    public function setSangra($sangra)
    {
        $this->sangra = $sangra;

        return $this;
    }

    /**
     * Get sangra
     *
     * @return boolean
     */
    public function getSangra()
    {
        return $this->sangra;
    }

    /**
     * Set fchprofi
     *
     * @param string $fchprofi
     *
     * @return Paciente
     */
    public function setFchprofi($fchprofi)
    {
        $this->fchprofi = $fchprofi;

        return $this;
    }

    /**
     * Get fchprofi
     *
     * @return string
     */
    public function getFchprofi()
    {
        return $this->fchprofi;
    }

    /**
     * Set ruidos
     *
     * @param string $ruidos
     *
     * @return Paciente
     */
    public function setRuidos($ruidos)
    {
        $this->ruidos = $ruidos;

        return $this;
    }

    /**
     * Get ruidos
     *
     * @return string
     */
    public function getRuidos()
    {
        return $this->ruidos;
    }

    /**
     * Set satisfecho
     *
     * @param string $satisfecho
     *
     * @return Paciente
     */
    public function setSatisfecho($satisfecho)
    {
        $this->satisfecho = $satisfecho;

        return $this;
    }

    /**
     * Get satisfecho
     *
     * @return string
     */
    public function getSatisfecho()
    {
        return $this->satisfecho;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Paciente
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
     * @return Paciente
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
     * @return Paciente
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
     * @return Paciente
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
     * Set email2
     *
     * @param string $email2
     *
     * @return Paciente
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set conoce
     *
     * @param string $conoce
     *
     * @return Paciente
     */
    public function setConoce($conoce)
    {
        $this->conoce = $conoce;

        return $this;
    }

    /**
     * Get conoce
     *
     * @return string
     */
    public function getConoce()
    {
        return $this->conoce;
    }

    /**
     * Set refer
     *
     * @param string $refer
     *
     * @return Paciente
     */
    public function setRefer($refer)
    {
        $this->refer = $refer;

        return $this;
    }

    /**
     * Get refer
     *
     * @return string
     */
    public function getRefer()
    {
        return $this->refer;
    }

    /**
     * Set canje
     *
     * @param boolean $canje
     *
     * @return Paciente
     */
    public function setCanje($canje)
    {
        $this->canje = $canje;

        return $this;
    }

    /**
     * Get canje
     *
     * @return boolean
     */
    public function getCanje()
    {
        return $this->canje;
    }

    /**
     * Set fchultvis
     *
     * @param \DateTime $fchultvis
     *
     * @return Paciente
     */
    public function setFchultvis($fchultvis)
    {
        $this->fchultvis = $fchultvis;

        return $this;
    }

    /**
     * Get fchultvis
     *
     * @return \DateTime
     */
    public function getFchultvis()
    {
        return $this->fchultvis;
    }

    /**
     * Set edo
     *
     * @param string $edo
     *
     * @return Paciente
     */
    public function setEdo($edo)
    {
        $this->edo = $edo;

        return $this;
    }

    /**
     * Get edo
     *
     * @return string
     */
    public function getEdo()
    {
        return $this->edo;
    }

    /**
     * Set cpais
     *
     * @param string $cpais
     *
     * @return Paciente
     */
    public function setCpais($cpais)
    {
        $this->cpais = $cpais;

        return $this;
    }

    /**
     * Get cpais
     *
     * @return string
     */
    public function getCpais()
    {
        return $this->cpais;
    }

    /**
     * Set lugproc
     *
     * @param string $lugproc
     *
     * @return Paciente
     */
    public function setLugproc($lugproc)
    {
        $this->lugproc = $lugproc;

        return $this;
    }

    /**
     * Get lugproc
     *
     * @return string
     */
    public function getLugproc()
    {
        return $this->lugproc;
    }

    /**
     * Set lugnace
     *
     * @param string $lugnace
     *
     * @return Paciente
     */
    public function setLugnace($lugnace)
    {
        $this->lugnace = $lugnace;

        return $this;
    }

    /**
     * Get lugnace
     *
     * @return string
     */
    public function getLugnace()
    {
        return $this->lugnace;
    }

    /**
     * Set mcard
     *
     * @param string $mcard
     *
     * @return Paciente
     */
    public function setMcard($mcard)
    {
        $this->mcard = $mcard;

        return $this;
    }

    /**
     * Get mcard
     *
     * @return string
     */
    public function getMcard()
    {
        return $this->mcard;
    }

    /**
     * Set vencemcard
     *
     * @param \DateTime $vencemcard
     *
     * @return Paciente
     */
    public function setVencemcard($vencemcard)
    {
        $this->vencemcard = $vencemcard;

        return $this;
    }

    /**
     * Get vencemcard
     *
     * @return \DateTime
     */
    public function getVencemcard()
    {
        return $this->vencemcard;
    }

    /**
     * Set enfermedad
     *
     * @param string $enfermedad
     *
     * @return Paciente
     */
    public function setEnfermedad($enfermedad)
    {
        $this->enfermedad = $enfermedad;

        return $this;
    }

    /**
     * Get enfermedad
     *
     * @return string
     */
    public function getEnfermedad()
    {
        return $this->enfermedad;
    }

    /**
     * Set alergias
     *
     * @param string $alergias
     *
     * @return Paciente
     */
    public function setAlergias($alergias)
    {
        $this->alergias = $alergias;

        return $this;
    }

    /**
     * Get alergias
     *
     * @return string
     */
    public function getAlergias()
    {
        return $this->alergias;
    }

    /**
     * Set hispsi
     *
     * @param string $hispsi
     *
     * @return Paciente
     */
    public function setHispsi($hispsi)
    {
        $this->hispsi = $hispsi;

        return $this;
    }

    /**
     * Get hispsi
     *
     * @return string
     */
    public function getHispsi()
    {
        return $this->hispsi;
    }

    /**
     * Set familiar
     *
     * @param string $familiar
     *
     * @return Paciente
     */
    public function setFamiliar($familiar)
    {
        $this->familiar = $familiar;

        return $this;
    }

    /**
     * Get familiar
     *
     * @return string
     */
    public function getFamiliar()
    {
        return $this->familiar;
    }

    /**
     * Set biopsico
     *
     * @param string $biopsico
     *
     * @return Paciente
     */
    public function setBiopsico($biopsico)
    {
        $this->biopsico = $biopsico;

        return $this;
    }

    /**
     * Get biopsico
     *
     * @return string
     */
    public function getBiopsico()
    {
        return $this->biopsico;
    }

    /**
     * Set diagnostico
     *
     * @param string $diagnostico
     *
     * @return Paciente
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return string
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set tratamiento
     *
     * @param string $tratamiento
     *
     * @return Paciente
     */
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get tratamiento
     *
     * @return string
     */
    public function getTratamiento()
    {
        return $this->tratamiento;
    }

    /**
     * Set alta
     *
     * @param string $alta
     *
     * @return Paciente
     */
    public function setAlta($alta)
    {
        $this->alta = $alta;

        return $this;
    }

    /**
     * Get alta
     *
     * @return string
     */
    public function getAlta()
    {
        return $this->alta;
    }

    /**
     * Set aler
     *
     * @param boolean $aler
     *
     * @return Paciente
     */
    public function setAler($aler)
    {
        $this->aler = $aler;

        return $this;
    }

    /**
     * Get aler
     *
     * @return boolean
     */
    public function getAler()
    {
        return $this->aler;
    }

    /**
     * Set xaler
     *
     * @param string $xaler
     *
     * @return Paciente
     */
    public function setXaler($xaler)
    {
        $this->xaler = $xaler;

        return $this;
    }

    /**
     * Get xaler
     *
     * @return string
     */
    public function getXaler()
    {
        return $this->xaler;
    }

    /**
     * Set alernin
     *
     * @param boolean $alernin
     *
     * @return Paciente
     */
    public function setAlernin($alernin)
    {
        $this->alernin = $alernin;

        return $this;
    }

    /**
     * Get alernin
     *
     * @return boolean
     */
    public function getAlernin()
    {
        return $this->alernin;
    }

    /**
     * Set notalta
     *
     * @param string $notalta
     *
     * @return Paciente
     */
    public function setNotalta($notalta)
    {
        $this->notalta = $notalta;

        return $this;
    }

    /**
     * Get notalta
     *
     * @return string
     */
    public function getNotalta()
    {
        return $this->notalta;
    }

    /**
     * Set meses
     *
     * @param float $meses
     *
     * @return Paciente
     */
    public function setMeses($meses)
    {
        $this->meses = $meses;

        return $this;
    }

    /**
     * Get meses
     *
     * @return float
     */
    public function getMeses()
    {
        return $this->meses;
    }

    /**
     * Set tipoalta
     *
     * @param boolean $tipoalta
     *
     * @return Paciente
     */
    public function setTipoalta($tipoalta)
    {
        $this->tipoalta = $tipoalta;

        return $this;
    }

    /**
     * Get tipoalta
     *
     * @return boolean
     */
    public function getTipoalta()
    {
        return $this->tipoalta;
    }

    /**
     * Set otros
     *
     * @param string $otros
     *
     * @return Paciente
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set teleme
     *
     * @param string $teleme
     *
     * @return Paciente
     */
    public function setTeleme($teleme)
    {
        $this->teleme = $teleme;

        return $this;
    }

    /**
     * Get teleme
     *
     * @return string
     */
    public function getTeleme()
    {
        return $this->teleme;
    }

    /**
     * Set alernini
     *
     * @param string $alernini
     *
     * @return Paciente
     */
    public function setAlernini($alernini)
    {
        $this->alernini = $alernini;

        return $this;
    }

    /**
     * Get alernini
     *
     * @return string
     */
    public function getAlernini()
    {
        return $this->alernini;
    }

    /**
     * Set tipalta
     *
     * @param string $tipalta
     *
     * @return Paciente
     */
    public function setTipalta($tipalta)
    {
        $this->tipalta = $tipalta;

        return $this;
    }

    /**
     * Get tipalta
     *
     * @return string
     */
    public function getTipalta()
    {
        return $this->tipalta;
    }

    /**
     * Set historia
     *
     * @param string $historia
     *
     * @return Paciente
     */
    public function setHistoria($historia)
    {
        $this->historia = $historia;

        return $this;
    }

    /**
     * Get historia
     *
     * @return string
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     *
     * @return Paciente
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * Set fchcrea
     *
     * @param \DateTime $fchcrea
     *
     * @return Paciente
     */
    public function setFchcrea($fchcrea)
    {
        $this->fchcrea = $fchcrea;

        return $this;
    }

    /**
     * Get fchcrea
     *
     * @return \DateTime
     */
    public function getFchcrea()
    {
        return $this->fchcrea;
    }

    /**
     * Set tipop
     *
     * @param string $tipop
     *
     * @return Paciente
     */
    public function setTipop($tipop)
    {
        $this->tipop = $tipop;

        return $this;
    }

    /**
     * Get tipop
     *
     * @return string
     */
    public function getTipop()
    {
        return $this->tipop;
    }
}
