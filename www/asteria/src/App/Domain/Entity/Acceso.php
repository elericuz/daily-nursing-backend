<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acceso
 *
 * @ORM\Table(name="acceso")
 * @ORM\Entity
 */
class Acceso
{
    /**
     * @var string
     *
     * @ORM\Column(name="codusuario", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codusuario = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="elimina", type="integer", nullable=true)
     */
    private $elimina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="escribe", type="integer", nullable=true)
     */
    private $escribe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lee", type="integer", nullable=true)
     */
    private $lee = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codobjeto", type="string", length=10, nullable=true)
     */
    private $codobjeto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualiza", type="date", nullable=true)
     */
    private $actualiza;



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
     * Set elimina
     *
     * @param integer $elimina
     *
     * @return Acceso
     */
    public function setElimina($elimina)
    {
        $this->elimina = $elimina;

        return $this;
    }

    /**
     * Get elimina
     *
     * @return integer
     */
    public function getElimina()
    {
        return $this->elimina;
    }

    /**
     * Set escribe
     *
     * @param integer $escribe
     *
     * @return Acceso
     */
    public function setEscribe($escribe)
    {
        $this->escribe = $escribe;

        return $this;
    }

    /**
     * Get escribe
     *
     * @return integer
     */
    public function getEscribe()
    {
        return $this->escribe;
    }

    /**
     * Set lee
     *
     * @param integer $lee
     *
     * @return Acceso
     */
    public function setLee($lee)
    {
        $this->lee = $lee;

        return $this;
    }

    /**
     * Get lee
     *
     * @return integer
     */
    public function getLee()
    {
        return $this->lee;
    }

    /**
     * Set codobjeto
     *
     * @param string $codobjeto
     *
     * @return Acceso
     */
    public function setCodobjeto($codobjeto)
    {
        $this->codobjeto = $codobjeto;

        return $this;
    }

    /**
     * Get codobjeto
     *
     * @return string
     */
    public function getCodobjeto()
    {
        return $this->codobjeto;
    }

    /**
     * Set actualiza
     *
     * @param \DateTime $actualiza
     *
     * @return Acceso
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
