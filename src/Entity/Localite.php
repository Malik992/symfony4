<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity
 */
class Localite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleloca", type="string", length=50, nullable=false)
     */
    private $libelleloca;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelleloca
     *
     * @return  string
     */ 
    public function getLibelleloca()
    {
        return $this->libelleloca;
    }

    /**
     * Set the value of libelleloca
     *
     * @param  string  $libelleloca
     *
     * @return  self
     */ 
    public function setLibelleloca(string $libelleloca)
    {
        $this->libelleloca = $libelleloca;

        return $this;
    }
}
