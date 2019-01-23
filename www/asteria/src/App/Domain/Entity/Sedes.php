<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sedes
 *
 * @ORM\Table(name="sedes", indexes={@ORM\Index(name="csede", columns={"csede", "xsede"})})
 * @ORM\Entity
 */
class Sedes
{
    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csede = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xsede", type="string", length=45, nullable=true)
     */
    private $xsede;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="abrevia", type="string", length=1, nullable=true)
     */
    private $abrevia;

    /**
     * @var string
     *
     * @ORM\Column(name="equivale", type="string", length=1, nullable=true)
     */
    private $equivale;

    /**
     * @var string
     *
     * @ORM\Column(name="administra", type="string", length=60, nullable=true)
     */
    private $administra;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="nextel", type="string", length=10, nullable=true)
     */
    private $nextel;

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
     * @ORM\Column(name="paciente", type="float", precision=10, scale=0, nullable=true)
     */
    private $paciente;

    /**
     * @var float
     *
     * @ORM\Column(name="factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $factura;

    /**
     * @var float
     *
     * @ORM\Column(name="boleta", type="float", precision=10, scale=0, nullable=true)
     */
    private $boleta;

    /**
     * @var float
     *
     * @ORM\Column(name="recibo", type="float", precision=10, scale=0, nullable=true)
     */
    private $recibo;

    /**
     * @var float
     *
     * @ORM\Column(name="compras", type="float", precision=10, scale=0, nullable=true)
     */
    private $compras;

    /**
     * @var integer
     *
     * @ORM\Column(name="afiliada", type="integer", nullable=true)
     */
    private $afiliada = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="facser", type="string", length=3, nullable=true)
     */
    private $facser;

    /**
     * @var string
     *
     * @ORM\Column(name="bolser", type="string", length=3, nullable=true)
     */
    private $bolser;

    /**
     * @var string
     *
     * @ORM\Column(name="cuenta", type="string", length=6, nullable=true)
     */
    private $cuenta;

    /**
     * @var float
     *
     * @ORM\Column(name="salida", type="float", precision=10, scale=0, nullable=true)
     */
    private $salida;

    /**
     * @var float
     *
     * @ORM\Column(name="clave", type="float", precision=10, scale=2, nullable=true)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="abrevia2", type="string", length=3, nullable=true)
     */
    private $abrevia2 = '000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="amb", type="boolean", nullable=true)
     */
    private $amb = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="notcre", type="float", precision=6, scale=0, nullable=true)
     */
    private $notcre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="calmacen", type="string", length=3, nullable=true)
     */
    private $calmacen = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="activa", type="boolean", nullable=true)
     */
    private $activa = '1';



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
     * Set xsede
     *
     * @param string $xsede
     *
     * @return Sedes
     */
    public function setXsede($xsede)
    {
        $this->xsede = $xsede;

        return $this;
    }

    /**
     * Get xsede
     *
     * @return string
     */
    public function getXsede()
    {
        return $this->xsede;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Sedes
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
     * Set abrevia
     *
     * @param string $abrevia
     *
     * @return Sedes
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
     * Set equivale
     *
     * @param string $equivale
     *
     * @return Sedes
     */
    public function setEquivale($equivale)
    {
        $this->equivale = $equivale;

        return $this;
    }

    /**
     * Get equivale
     *
     * @return string
     */
    public function getEquivale()
    {
        return $this->equivale;
    }

    /**
     * Set administra
     *
     * @param string $administra
     *
     * @return Sedes
     */
    public function setAdministra($administra)
    {
        $this->administra = $administra;

        return $this;
    }

    /**
     * Get administra
     *
     * @return string
     */
    public function getAdministra()
    {
        return $this->administra;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Sedes
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
     * Set nextel
     *
     * @param string $nextel
     *
     * @return Sedes
     */
    public function setNextel($nextel)
    {
        $this->nextel = $nextel;

        return $this;
    }

    /**
     * Get nextel
     *
     * @return string
     */
    public function getNextel()
    {
        return $this->nextel;
    }

    /**
     * Set creareg
     *
     * @param string $creareg
     *
     * @return Sedes
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
     * @return Sedes
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
     * @return Sedes
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
     * @return Sedes
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
     * Set paciente
     *
     * @param float $paciente
     *
     * @return Sedes
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
     * Set factura
     *
     * @param float $factura
     *
     * @return Sedes
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return float
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set boleta
     *
     * @param float $boleta
     *
     * @return Sedes
     */
    public function setBoleta($boleta)
    {
        $this->boleta = $boleta;

        return $this;
    }

    /**
     * Get boleta
     *
     * @return float
     */
    public function getBoleta()
    {
        return $this->boleta;
    }

    /**
     * Set recibo
     *
     * @param float $recibo
     *
     * @return Sedes
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
     * Set compras
     *
     * @param float $compras
     *
     * @return Sedes
     */
    public function setCompras($compras)
    {
        $this->compras = $compras;

        return $this;
    }

    /**
     * Get compras
     *
     * @return float
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * Set afiliada
     *
     * @param integer $afiliada
     *
     * @return Sedes
     */
    public function setAfiliada($afiliada)
    {
        $this->afiliada = $afiliada;

        return $this;
    }

    /**
     * Get afiliada
     *
     * @return integer
     */
    public function getAfiliada()
    {
        return $this->afiliada;
    }

    /**
     * Set facser
     *
     * @param string $facser
     *
     * @return Sedes
     */
    public function setFacser($facser)
    {
        $this->facser = $facser;

        return $this;
    }

    /**
     * Get facser
     *
     * @return string
     */
    public function getFacser()
    {
        return $this->facser;
    }

    /**
     * Set bolser
     *
     * @param string $bolser
     *
     * @return Sedes
     */
    public function setBolser($bolser)
    {
        $this->bolser = $bolser;

        return $this;
    }

    /**
     * Get bolser
     *
     * @return string
     */
    public function getBolser()
    {
        return $this->bolser;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     *
     * @return Sedes
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set salida
     *
     * @param float $salida
     *
     * @return Sedes
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
     * Set clave
     *
     * @param float $clave
     *
     * @return Sedes
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
     * Set abrevia2
     *
     * @param string $abrevia2
     *
     * @return Sedes
     */
    public function setAbrevia2($abrevia2)
    {
        $this->abrevia2 = $abrevia2;

        return $this;
    }

    /**
     * Get abrevia2
     *
     * @return string
     */
    public function getAbrevia2()
    {
        return $this->abrevia2;
    }

    /**
     * Set amb
     *
     * @param boolean $amb
     *
     * @return Sedes
     */
    public function setAmb($amb)
    {
        $this->amb = $amb;

        return $this;
    }

    /**
     * Get amb
     *
     * @return boolean
     */
    public function getAmb()
    {
        return $this->amb;
    }

    /**
     * Set notcre
     *
     * @param float $notcre
     *
     * @return Sedes
     */
    public function setNotcre($notcre)
    {
        $this->notcre = $notcre;

        return $this;
    }

    /**
     * Get notcre
     *
     * @return float
     */
    public function getNotcre()
    {
        return $this->notcre;
    }

    /**
     * Set calmacen
     *
     * @param string $calmacen
     *
     * @return Sedes
     */
    public function setCalmacen($calmacen)
    {
        $this->calmacen = $calmacen;

        return $this;
    }

    /**
     * Get calmacen
     *
     * @return string
     */
    public function getCalmacen()
    {
        return $this->calmacen;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Sedes
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean
     */
    public function getActiva()
    {
        return $this->activa;
    }
}
