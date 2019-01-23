<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="codusuario", columns={"codusuario"})})
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="codusuario", type="string", length=10, nullable=true)
     */
    private $codusuario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=30, nullable=true)
     */
    private $usuario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=8, nullable=true)
     */
    private $clave = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nivel", type="string", length=10, nullable=true)
     */
    private $nivel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=true)
     */
    private $csede = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=1, nullable=true)
     */
    private $flag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="salida", type="string", length=30, nullable=true)
     */
    private $salida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="copia", type="string", length=10, nullable=true)
     */
    private $copia = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="adm_sed", type="boolean", nullable=true)
     */
    private $admSed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="adm_tot", type="boolean", nullable=true)
     */
    private $admTot = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="descmax", type="float", precision=10, scale=2, nullable=true)
     */
    private $descmax = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="cperson", type="string", length=3, nullable=true)
     */
    private $cperson;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doc", type="boolean", nullable=true)
     */
    private $doc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gerencia", type="boolean", nullable=true)
     */
    private $gerencia = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="medico", type="boolean", nullable=true)
     */
    private $medico = '0';



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
     * Set codusuario
     *
     * @param string $codusuario
     *
     * @return Usuario
     */
    public function setCodusuario($codusuario)
    {
        $this->codusuario = $codusuario;

        return $this;
    }

    /**
     * Get codusuario
     *
     * @return string
     */
    public function getCodusuario()
    {
        return $this->codusuario;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuario
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
     * Set nivel
     *
     * @param string $nivel
     *
     * @return Usuario
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Usuario
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
     * Set flag
     *
     * @param string $flag
     *
     * @return Usuario
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set salida
     *
     * @param string $salida
     *
     * @return Usuario
     */
    public function setSalida($salida)
    {
        $this->salida = $salida;

        return $this;
    }

    /**
     * Get salida
     *
     * @return string
     */
    public function getSalida()
    {
        return $this->salida;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Usuario
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
     * Set copia
     *
     * @param string $copia
     *
     * @return Usuario
     */
    public function setCopia($copia)
    {
        $this->copia = $copia;

        return $this;
    }

    /**
     * Get copia
     *
     * @return string
     */
    public function getCopia()
    {
        return $this->copia;
    }

    /**
     * Set admSed
     *
     * @param boolean $admSed
     *
     * @return Usuario
     */
    public function setAdmSed($admSed)
    {
        $this->admSed = $admSed;

        return $this;
    }

    /**
     * Get admSed
     *
     * @return boolean
     */
    public function getAdmSed()
    {
        return $this->admSed;
    }

    /**
     * Set admTot
     *
     * @param boolean $admTot
     *
     * @return Usuario
     */
    public function setAdmTot($admTot)
    {
        $this->admTot = $admTot;

        return $this;
    }

    /**
     * Get admTot
     *
     * @return boolean
     */
    public function getAdmTot()
    {
        return $this->admTot;
    }

    /**
     * Set descmax
     *
     * @param float $descmax
     *
     * @return Usuario
     */
    public function setDescmax($descmax)
    {
        $this->descmax = $descmax;

        return $this;
    }

    /**
     * Get descmax
     *
     * @return float
     */
    public function getDescmax()
    {
        return $this->descmax;
    }

    /**
     * Set cperson
     *
     * @param string $cperson
     *
     * @return Usuario
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
     * Set doc
     *
     * @param boolean $doc
     *
     * @return Usuario
     */
    public function setDoc($doc)
    {
        $this->doc = $doc;

        return $this;
    }

    /**
     * Get doc
     *
     * @return boolean
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Set gerencia
     *
     * @param boolean $gerencia
     *
     * @return Usuario
     */
    public function setGerencia($gerencia)
    {
        $this->gerencia = $gerencia;

        return $this;
    }

    /**
     * Get gerencia
     *
     * @return boolean
     */
    public function getGerencia()
    {
        return $this->gerencia;
    }

    /**
     * Set medico
     *
     * @param boolean $medico
     *
     * @return Usuario
     */
    public function setMedico($medico)
    {
        $this->medico = $medico;

        return $this;
    }

    /**
     * Get medico
     *
     * @return boolean
     */
    public function getMedico()
    {
        return $this->medico;
    }
}
