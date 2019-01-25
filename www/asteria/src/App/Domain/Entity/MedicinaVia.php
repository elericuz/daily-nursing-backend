<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedicinaVia
 *
 * @ORM\Table(name="medicina_via")
 * @ORM\Entity
 */
class MedicinaVia
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
     * @ORM\Column(name="via", type="string", length=50, nullable=true)
     */
    private $via;



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
     * Set via
     *
     * @param string $via
     *
     * @return MedicinaVia
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string
     */
    public function getVia()
    {
        return $this->via;
    }
}
