<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 *
 * @ORM\Table(name="personal", indexes={@ORM\Index(name="cperson", columns={"cperson", "xperson"})})
 * @ORM\Entity
 */
class Personal
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
     * @ORM\Column(name="cperson", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cperson = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xperson", type="string", length=40, nullable=true)
     */
    private $xperson;

    /**
     * @var string
     *
     * @ORM\Column(name="direcc", type="string", length=40, nullable=true)
     */
    private $direcc;

    /**
     * @var string
     *
     * @ORM\Column(name="codubica", type="string", length=6, nullable=true)
     */
    private $codubica;

    /**
     * @var string
     *
     * @ORM\Column(name="telef", type="string", length=10, nullable=true)
     */
    private $telef;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nace", type="date", nullable=true)
     */
    private $nace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date", nullable=true)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date", nullable=true)
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="carea", type="string", length=1, nullable=true)
     */
    private $carea;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=8, nullable=true)
     */
    private $dni;

    /**
     * @var float
     *
     * @ORM\Column(name="sueldo", type="float", precision=10, scale=2, nullable=true)
     */
    private $sueldo;

    /**
     * @var string
     *
     * @ORM\Column(name="afp", type="string", length=2, nullable=true)
     */
    private $afp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="observa", type="string", length=80, nullable=true)
     */
    private $observa;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico", type="string", length=3, nullable=true)
     */
    private $cmedico;

    /**
     * @var float
     *
     * @ORM\Column(name="totaldia", type="float", precision=10, scale=2, nullable=true)
     */
    private $totaldia;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=10, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=50, nullable=true)
     */
    private $horario;

    /**
     * @var string
     *
     * @ORM\Column(name="ccargo", type="string", length=1, nullable=true)
     */
    private $ccargo;

    /**
     * @var string
     *
     * @ORM\Column(name="edo", type="string", length=1, nullable=true)
     */
    private $edo;

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
     * @ORM\Column(name="porcen1", type="float", precision=10, scale=2, nullable=true)
     */
    private $porcen1 = '0.00';



    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Personal
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
     * Set cperson
     *
     * @param string $cperson
     *
     * @return Personal
     */
    public function setCperson($cperson)
    {
        $this->cperson = $cperson;

        return $this;
    }

    /**
     * Get cperson
     *
     * @return string
     */
    public function getCperson()
    {
        return $this->cperson;
    }

    /**
     * Set xperson
     *
     * @param string $xperson
     *
     * @return Personal
     */
    public function setXperson($xperson)
    {
        $this->xperson = $xperson;

        return $this;
    }

    /**
     * Get xperson
     *
     * @return string
     */
    public function getXperson()
    {
        return $this->xperson;
    }

    /**
     * Set direcc
     *
     * @param string $direcc
     *
     * @return Personal
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
     * Set codubica
     *
     * @param string $codubica
     *
     * @return Personal
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
     * Set telef
     *
     * @param string $telef
     *
     * @return Personal
     */
    public function setTelef($telef)
    {
        $this->telef = $telef;

        return $this;
    }

    /**
     * Get telef
     *
     * @return string
     */
    public function getTelef()
    {
        return $this->telef;
    }

    /**
     * Set nace
     *
     * @param \DateTime $nace
     *
     * @return Personal
     */
    public function setNace($nace)
    {
        $this->nace = $nace;

        return $this;
    }

    /**
     * Get nace
     *
     * @return \DateTime
     */
    public function getNace()
    {
        return $this->nace;
    }

    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return Personal
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Personal
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set carea
     *
     * @param string $carea
     *
     * @return Personal
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
     * Set dni
     *
     * @param string $dni
     *
     * @return Personal
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
     * Set sueldo
     *
     * @param float $sueldo
     *
     * @return Personal
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    /**
     * Get sueldo
     *
     * @return float
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set afp
     *
     * @param string $afp
     *
     * @return Personal
     */
    public function setAfp($afp)
    {
        $this->afp = $afp;

        return $this;
    }

    /**
     * Get afp
     *
     * @return string
     */
    public function getAfp()
    {
        return $this->afp;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Personal
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
     * Set observa
     *
     * @param string $observa
     *
     * @return Personal
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
     * Set cmedico
     *
     * @param string $cmedico
     *
     * @return Personal
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
     * Set totaldia
     *
     * @param float $totaldia
     *
     * @return Personal
     */
    public function setTotaldia($totaldia)
    {
        $this->totaldia = $totaldia;

        return $this;
    }

    /**
     * Get totaldia
     *
     * @return float
     */
    public function getTotaldia()
    {
        return $this->totaldia;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Personal
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
     * Set horario
     *
     * @param string $horario
     *
     * @return Personal
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set ccargo
     *
     * @param string $ccargo
     *
     * @return Personal
     */
    public function setCcargo($ccargo)
    {
        $this->ccargo = $ccargo;

        return $this;
    }

    /**
     * Get ccargo
     *
     * @return string
     */
    public function getCcargo()
    {
        return $this->ccargo;
    }

    /**
     * Set edo
     *
     * @param string $edo
     *
     * @return Personal
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
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Personal
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
     * @return Personal
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
     * @return Personal
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
     * @return Personal
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
     * Set porcen1
     *
     * @param float $porcen1
     *
     * @return Personal
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
}
