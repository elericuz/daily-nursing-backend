<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docxhora2
 *
 * @ORM\Table(name="docxhora2", indexes={@ORM\Index(name="fecha", columns={"fecha"})})
 * @ORM\Entity
 */
class Docxhora2
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="chora", type="string", length=2, nullable=true)
     */
    private $chora = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="paciente1", type="string", length=60, nullable=true)
     */
    private $paciente1;

    /**
     * @var string
     *
     * @ORM\Column(name="observa1", type="string", length=50, nullable=true)
     */
    private $observa1;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico1", type="string", length=3, nullable=true)
     */
    private $cmedico1;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente2", type="string", length=60, nullable=true)
     */
    private $paciente2;

    /**
     * @var string
     *
     * @ORM\Column(name="observa2", type="string", length=50, nullable=true)
     */
    private $observa2;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico2", type="string", length=3, nullable=true)
     */
    private $cmedico2;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente3", type="string", length=60, nullable=true)
     */
    private $paciente3;

    /**
     * @var string
     *
     * @ORM\Column(name="observa3", type="string", length=50, nullable=true)
     */
    private $observa3;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico3", type="string", length=3, nullable=true)
     */
    private $cmedico3;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente4", type="string", length=60, nullable=true)
     */
    private $paciente4;

    /**
     * @var string
     *
     * @ORM\Column(name="observa4", type="string", length=50, nullable=true)
     */
    private $observa4;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico4", type="string", length=3, nullable=true)
     */
    private $cmedico4;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente5", type="string", length=60, nullable=true)
     */
    private $paciente5;

    /**
     * @var string
     *
     * @ORM\Column(name="observa5", type="string", length=50, nullable=true)
     */
    private $observa5;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico5", type="string", length=3, nullable=true)
     */
    private $cmedico5;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente6", type="string", length=60, nullable=true)
     */
    private $paciente6;

    /**
     * @var string
     *
     * @ORM\Column(name="observa6", type="string", length=50, nullable=true)
     */
    private $observa6;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico6", type="string", length=3, nullable=true)
     */
    private $cmedico6;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente7", type="string", length=60, nullable=true)
     */
    private $paciente7;

    /**
     * @var string
     *
     * @ORM\Column(name="observa7", type="string", length=50, nullable=true)
     */
    private $observa7;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico7", type="string", length=3, nullable=true)
     */
    private $cmedico7;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente8", type="string", length=50, nullable=true)
     */
    private $paciente8;

    /**
     * @var string
     *
     * @ORM\Column(name="observa8", type="string", length=50, nullable=true)
     */
    private $observa8;

    /**
     * @var string
     *
     * @ORM\Column(name="cmedico8", type="string", length=3, nullable=true)
     */
    private $cmedico8;

    /**
     * @var string
     *
     * @ORM\Column(name="csede", type="string", length=3, nullable=false)
     */
    private $csede = '';

    /**
     * @var string
     *
     * @ORM\Column(name="e1", type="string", length=1, nullable=true)
     */
    private $e1;

    /**
     * @var string
     *
     * @ORM\Column(name="e2", type="string", length=1, nullable=true)
     */
    private $e2;

    /**
     * @var string
     *
     * @ORM\Column(name="e3", type="string", length=1, nullable=true)
     */
    private $e3;

    /**
     * @var string
     *
     * @ORM\Column(name="e4", type="string", length=1, nullable=true)
     */
    private $e4;

    /**
     * @var string
     *
     * @ORM\Column(name="e5", type="string", length=1, nullable=true)
     */
    private $e5;

    /**
     * @var string
     *
     * @ORM\Column(name="e6", type="string", length=1, nullable=true)
     */
    private $e6;

    /**
     * @var string
     *
     * @ORM\Column(name="e7", type="string", length=1, nullable=true)
     */
    private $e7;

    /**
     * @var string
     *
     * @ORM\Column(name="e8", type="string", length=1, nullable=true)
     */
    private $e8;

    /**
     * @var string
     *
     * @ORM\Column(name="crea1", type="string", length=30, nullable=true)
     */
    private $crea1;

    /**
     * @var string
     *
     * @ORM\Column(name="modi1", type="string", length=30, nullable=true)
     */
    private $modi1;

    /**
     * @var string
     *
     * @ORM\Column(name="crea2", type="string", length=30, nullable=true)
     */
    private $crea2;

    /**
     * @var string
     *
     * @ORM\Column(name="modi2", type="string", length=30, nullable=true)
     */
    private $modi2;

    /**
     * @var string
     *
     * @ORM\Column(name="crea3", type="string", length=30, nullable=true)
     */
    private $crea3;

    /**
     * @var string
     *
     * @ORM\Column(name="modi3", type="string", length=30, nullable=true)
     */
    private $modi3;

    /**
     * @var string
     *
     * @ORM\Column(name="crea4", type="string", length=30, nullable=true)
     */
    private $crea4;

    /**
     * @var string
     *
     * @ORM\Column(name="modi4", type="string", length=30, nullable=true)
     */
    private $modi4;

    /**
     * @var string
     *
     * @ORM\Column(name="crea5", type="string", length=30, nullable=true)
     */
    private $crea5;

    /**
     * @var string
     *
     * @ORM\Column(name="modi5", type="string", length=30, nullable=true)
     */
    private $modi5;

    /**
     * @var string
     *
     * @ORM\Column(name="crea6", type="string", length=30, nullable=true)
     */
    private $crea6;

    /**
     * @var string
     *
     * @ORM\Column(name="modi6", type="string", length=30, nullable=true)
     */
    private $modi6;

    /**
     * @var string
     *
     * @ORM\Column(name="crea7", type="string", length=30, nullable=true)
     */
    private $crea7;

    /**
     * @var string
     *
     * @ORM\Column(name="modi7", type="string", length=30, nullable=true)
     */
    private $modi7;

    /**
     * @var string
     *
     * @ORM\Column(name="crea8", type="string", length=30, nullable=true)
     */
    private $crea8;

    /**
     * @var string
     *
     * @ORM\Column(name="modi8", type="string", length=30, nullable=true)
     */
    private $modi8;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Docxhora2
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
     * Set chora
     *
     * @param string $chora
     *
     * @return Docxhora2
     */
    public function setChora($chora)
    {
        $this->chora = $chora;

        return $this;
    }

    /**
     * Get chora
     *
     * @return string
     */
    public function getChora()
    {
        return $this->chora;
    }

    /**
     * Set paciente1
     *
     * @param string $paciente1
     *
     * @return Docxhora2
     */
    public function setPaciente1($paciente1)
    {
        $this->paciente1 = $paciente1;

        return $this;
    }

    /**
     * Get paciente1
     *
     * @return string
     */
    public function getPaciente1()
    {
        return $this->paciente1;
    }

    /**
     * Set observa1
     *
     * @param string $observa1
     *
     * @return Docxhora2
     */
    public function setObserva1($observa1)
    {
        $this->observa1 = $observa1;

        return $this;
    }

    /**
     * Get observa1
     *
     * @return string
     */
    public function getObserva1()
    {
        return $this->observa1;
    }

    /**
     * Set cmedico1
     *
     * @param string $cmedico1
     *
     * @return Docxhora2
     */
    public function setCmedico1($cmedico1)
    {
        $this->cmedico1 = $cmedico1;

        return $this;
    }

    /**
     * Get cmedico1
     *
     * @return string
     */
    public function getCmedico1()
    {
        return $this->cmedico1;
    }

    /**
     * Set paciente2
     *
     * @param string $paciente2
     *
     * @return Docxhora2
     */
    public function setPaciente2($paciente2)
    {
        $this->paciente2 = $paciente2;

        return $this;
    }

    /**
     * Get paciente2
     *
     * @return string
     */
    public function getPaciente2()
    {
        return $this->paciente2;
    }

    /**
     * Set observa2
     *
     * @param string $observa2
     *
     * @return Docxhora2
     */
    public function setObserva2($observa2)
    {
        $this->observa2 = $observa2;

        return $this;
    }

    /**
     * Get observa2
     *
     * @return string
     */
    public function getObserva2()
    {
        return $this->observa2;
    }

    /**
     * Set cmedico2
     *
     * @param string $cmedico2
     *
     * @return Docxhora2
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
     * Set paciente3
     *
     * @param string $paciente3
     *
     * @return Docxhora2
     */
    public function setPaciente3($paciente3)
    {
        $this->paciente3 = $paciente3;

        return $this;
    }

    /**
     * Get paciente3
     *
     * @return string
     */
    public function getPaciente3()
    {
        return $this->paciente3;
    }

    /**
     * Set observa3
     *
     * @param string $observa3
     *
     * @return Docxhora2
     */
    public function setObserva3($observa3)
    {
        $this->observa3 = $observa3;

        return $this;
    }

    /**
     * Get observa3
     *
     * @return string
     */
    public function getObserva3()
    {
        return $this->observa3;
    }

    /**
     * Set cmedico3
     *
     * @param string $cmedico3
     *
     * @return Docxhora2
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
     * Set paciente4
     *
     * @param string $paciente4
     *
     * @return Docxhora2
     */
    public function setPaciente4($paciente4)
    {
        $this->paciente4 = $paciente4;

        return $this;
    }

    /**
     * Get paciente4
     *
     * @return string
     */
    public function getPaciente4()
    {
        return $this->paciente4;
    }

    /**
     * Set observa4
     *
     * @param string $observa4
     *
     * @return Docxhora2
     */
    public function setObserva4($observa4)
    {
        $this->observa4 = $observa4;

        return $this;
    }

    /**
     * Get observa4
     *
     * @return string
     */
    public function getObserva4()
    {
        return $this->observa4;
    }

    /**
     * Set cmedico4
     *
     * @param string $cmedico4
     *
     * @return Docxhora2
     */
    public function setCmedico4($cmedico4)
    {
        $this->cmedico4 = $cmedico4;

        return $this;
    }

    /**
     * Get cmedico4
     *
     * @return string
     */
    public function getCmedico4()
    {
        return $this->cmedico4;
    }

    /**
     * Set paciente5
     *
     * @param string $paciente5
     *
     * @return Docxhora2
     */
    public function setPaciente5($paciente5)
    {
        $this->paciente5 = $paciente5;

        return $this;
    }

    /**
     * Get paciente5
     *
     * @return string
     */
    public function getPaciente5()
    {
        return $this->paciente5;
    }

    /**
     * Set observa5
     *
     * @param string $observa5
     *
     * @return Docxhora2
     */
    public function setObserva5($observa5)
    {
        $this->observa5 = $observa5;

        return $this;
    }

    /**
     * Get observa5
     *
     * @return string
     */
    public function getObserva5()
    {
        return $this->observa5;
    }

    /**
     * Set cmedico5
     *
     * @param string $cmedico5
     *
     * @return Docxhora2
     */
    public function setCmedico5($cmedico5)
    {
        $this->cmedico5 = $cmedico5;

        return $this;
    }

    /**
     * Get cmedico5
     *
     * @return string
     */
    public function getCmedico5()
    {
        return $this->cmedico5;
    }

    /**
     * Set paciente6
     *
     * @param string $paciente6
     *
     * @return Docxhora2
     */
    public function setPaciente6($paciente6)
    {
        $this->paciente6 = $paciente6;

        return $this;
    }

    /**
     * Get paciente6
     *
     * @return string
     */
    public function getPaciente6()
    {
        return $this->paciente6;
    }

    /**
     * Set observa6
     *
     * @param string $observa6
     *
     * @return Docxhora2
     */
    public function setObserva6($observa6)
    {
        $this->observa6 = $observa6;

        return $this;
    }

    /**
     * Get observa6
     *
     * @return string
     */
    public function getObserva6()
    {
        return $this->observa6;
    }

    /**
     * Set cmedico6
     *
     * @param string $cmedico6
     *
     * @return Docxhora2
     */
    public function setCmedico6($cmedico6)
    {
        $this->cmedico6 = $cmedico6;

        return $this;
    }

    /**
     * Get cmedico6
     *
     * @return string
     */
    public function getCmedico6()
    {
        return $this->cmedico6;
    }

    /**
     * Set paciente7
     *
     * @param string $paciente7
     *
     * @return Docxhora2
     */
    public function setPaciente7($paciente7)
    {
        $this->paciente7 = $paciente7;

        return $this;
    }

    /**
     * Get paciente7
     *
     * @return string
     */
    public function getPaciente7()
    {
        return $this->paciente7;
    }

    /**
     * Set observa7
     *
     * @param string $observa7
     *
     * @return Docxhora2
     */
    public function setObserva7($observa7)
    {
        $this->observa7 = $observa7;

        return $this;
    }

    /**
     * Get observa7
     *
     * @return string
     */
    public function getObserva7()
    {
        return $this->observa7;
    }

    /**
     * Set cmedico7
     *
     * @param string $cmedico7
     *
     * @return Docxhora2
     */
    public function setCmedico7($cmedico7)
    {
        $this->cmedico7 = $cmedico7;

        return $this;
    }

    /**
     * Get cmedico7
     *
     * @return string
     */
    public function getCmedico7()
    {
        return $this->cmedico7;
    }

    /**
     * Set paciente8
     *
     * @param string $paciente8
     *
     * @return Docxhora2
     */
    public function setPaciente8($paciente8)
    {
        $this->paciente8 = $paciente8;

        return $this;
    }

    /**
     * Get paciente8
     *
     * @return string
     */
    public function getPaciente8()
    {
        return $this->paciente8;
    }

    /**
     * Set observa8
     *
     * @param string $observa8
     *
     * @return Docxhora2
     */
    public function setObserva8($observa8)
    {
        $this->observa8 = $observa8;

        return $this;
    }

    /**
     * Get observa8
     *
     * @return string
     */
    public function getObserva8()
    {
        return $this->observa8;
    }

    /**
     * Set cmedico8
     *
     * @param string $cmedico8
     *
     * @return Docxhora2
     */
    public function setCmedico8($cmedico8)
    {
        $this->cmedico8 = $cmedico8;

        return $this;
    }

    /**
     * Get cmedico8
     *
     * @return string
     */
    public function getCmedico8()
    {
        return $this->cmedico8;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Docxhora2
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
     * Set e1
     *
     * @param string $e1
     *
     * @return Docxhora2
     */
    public function setE1($e1)
    {
        $this->e1 = $e1;

        return $this;
    }

    /**
     * Get e1
     *
     * @return string
     */
    public function getE1()
    {
        return $this->e1;
    }

    /**
     * Set e2
     *
     * @param string $e2
     *
     * @return Docxhora2
     */
    public function setE2($e2)
    {
        $this->e2 = $e2;

        return $this;
    }

    /**
     * Get e2
     *
     * @return string
     */
    public function getE2()
    {
        return $this->e2;
    }

    /**
     * Set e3
     *
     * @param string $e3
     *
     * @return Docxhora2
     */
    public function setE3($e3)
    {
        $this->e3 = $e3;

        return $this;
    }

    /**
     * Get e3
     *
     * @return string
     */
    public function getE3()
    {
        return $this->e3;
    }

    /**
     * Set e4
     *
     * @param string $e4
     *
     * @return Docxhora2
     */
    public function setE4($e4)
    {
        $this->e4 = $e4;

        return $this;
    }

    /**
     * Get e4
     *
     * @return string
     */
    public function getE4()
    {
        return $this->e4;
    }

    /**
     * Set e5
     *
     * @param string $e5
     *
     * @return Docxhora2
     */
    public function setE5($e5)
    {
        $this->e5 = $e5;

        return $this;
    }

    /**
     * Get e5
     *
     * @return string
     */
    public function getE5()
    {
        return $this->e5;
    }

    /**
     * Set e6
     *
     * @param string $e6
     *
     * @return Docxhora2
     */
    public function setE6($e6)
    {
        $this->e6 = $e6;

        return $this;
    }

    /**
     * Get e6
     *
     * @return string
     */
    public function getE6()
    {
        return $this->e6;
    }

    /**
     * Set e7
     *
     * @param string $e7
     *
     * @return Docxhora2
     */
    public function setE7($e7)
    {
        $this->e7 = $e7;

        return $this;
    }

    /**
     * Get e7
     *
     * @return string
     */
    public function getE7()
    {
        return $this->e7;
    }

    /**
     * Set e8
     *
     * @param string $e8
     *
     * @return Docxhora2
     */
    public function setE8($e8)
    {
        $this->e8 = $e8;

        return $this;
    }

    /**
     * Get e8
     *
     * @return string
     */
    public function getE8()
    {
        return $this->e8;
    }

    /**
     * Set crea1
     *
     * @param string $crea1
     *
     * @return Docxhora2
     */
    public function setCrea1($crea1)
    {
        $this->crea1 = $crea1;

        return $this;
    }

    /**
     * Get crea1
     *
     * @return string
     */
    public function getCrea1()
    {
        return $this->crea1;
    }

    /**
     * Set modi1
     *
     * @param string $modi1
     *
     * @return Docxhora2
     */
    public function setModi1($modi1)
    {
        $this->modi1 = $modi1;

        return $this;
    }

    /**
     * Get modi1
     *
     * @return string
     */
    public function getModi1()
    {
        return $this->modi1;
    }

    /**
     * Set crea2
     *
     * @param string $crea2
     *
     * @return Docxhora2
     */
    public function setCrea2($crea2)
    {
        $this->crea2 = $crea2;

        return $this;
    }

    /**
     * Get crea2
     *
     * @return string
     */
    public function getCrea2()
    {
        return $this->crea2;
    }

    /**
     * Set modi2
     *
     * @param string $modi2
     *
     * @return Docxhora2
     */
    public function setModi2($modi2)
    {
        $this->modi2 = $modi2;

        return $this;
    }

    /**
     * Get modi2
     *
     * @return string
     */
    public function getModi2()
    {
        return $this->modi2;
    }

    /**
     * Set crea3
     *
     * @param string $crea3
     *
     * @return Docxhora2
     */
    public function setCrea3($crea3)
    {
        $this->crea3 = $crea3;

        return $this;
    }

    /**
     * Get crea3
     *
     * @return string
     */
    public function getCrea3()
    {
        return $this->crea3;
    }

    /**
     * Set modi3
     *
     * @param string $modi3
     *
     * @return Docxhora2
     */
    public function setModi3($modi3)
    {
        $this->modi3 = $modi3;

        return $this;
    }

    /**
     * Get modi3
     *
     * @return string
     */
    public function getModi3()
    {
        return $this->modi3;
    }

    /**
     * Set crea4
     *
     * @param string $crea4
     *
     * @return Docxhora2
     */
    public function setCrea4($crea4)
    {
        $this->crea4 = $crea4;

        return $this;
    }

    /**
     * Get crea4
     *
     * @return string
     */
    public function getCrea4()
    {
        return $this->crea4;
    }

    /**
     * Set modi4
     *
     * @param string $modi4
     *
     * @return Docxhora2
     */
    public function setModi4($modi4)
    {
        $this->modi4 = $modi4;

        return $this;
    }

    /**
     * Get modi4
     *
     * @return string
     */
    public function getModi4()
    {
        return $this->modi4;
    }

    /**
     * Set crea5
     *
     * @param string $crea5
     *
     * @return Docxhora2
     */
    public function setCrea5($crea5)
    {
        $this->crea5 = $crea5;

        return $this;
    }

    /**
     * Get crea5
     *
     * @return string
     */
    public function getCrea5()
    {
        return $this->crea5;
    }

    /**
     * Set modi5
     *
     * @param string $modi5
     *
     * @return Docxhora2
     */
    public function setModi5($modi5)
    {
        $this->modi5 = $modi5;

        return $this;
    }

    /**
     * Get modi5
     *
     * @return string
     */
    public function getModi5()
    {
        return $this->modi5;
    }

    /**
     * Set crea6
     *
     * @param string $crea6
     *
     * @return Docxhora2
     */
    public function setCrea6($crea6)
    {
        $this->crea6 = $crea6;

        return $this;
    }

    /**
     * Get crea6
     *
     * @return string
     */
    public function getCrea6()
    {
        return $this->crea6;
    }

    /**
     * Set modi6
     *
     * @param string $modi6
     *
     * @return Docxhora2
     */
    public function setModi6($modi6)
    {
        $this->modi6 = $modi6;

        return $this;
    }

    /**
     * Get modi6
     *
     * @return string
     */
    public function getModi6()
    {
        return $this->modi6;
    }

    /**
     * Set crea7
     *
     * @param string $crea7
     *
     * @return Docxhora2
     */
    public function setCrea7($crea7)
    {
        $this->crea7 = $crea7;

        return $this;
    }

    /**
     * Get crea7
     *
     * @return string
     */
    public function getCrea7()
    {
        return $this->crea7;
    }

    /**
     * Set modi7
     *
     * @param string $modi7
     *
     * @return Docxhora2
     */
    public function setModi7($modi7)
    {
        $this->modi7 = $modi7;

        return $this;
    }

    /**
     * Get modi7
     *
     * @return string
     */
    public function getModi7()
    {
        return $this->modi7;
    }

    /**
     * Set crea8
     *
     * @param string $crea8
     *
     * @return Docxhora2
     */
    public function setCrea8($crea8)
    {
        $this->crea8 = $crea8;

        return $this;
    }

    /**
     * Get crea8
     *
     * @return string
     */
    public function getCrea8()
    {
        return $this->crea8;
    }

    /**
     * Set modi8
     *
     * @param string $modi8
     *
     * @return Docxhora2
     */
    public function setModi8($modi8)
    {
        $this->modi8 = $modi8;

        return $this;
    }

    /**
     * Get modi8
     *
     * @return string
     */
    public function getModi8()
    {
        return $this->modi8;
    }
}
