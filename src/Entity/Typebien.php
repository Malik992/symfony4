<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typebien
 *
 * @ORM\Table(name="typebien")
 * @ORM\Entity
 */
class Typebien
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
     * @ORM\Column(name="libelletype", type="string", length=50, nullable=false)
     */
    private $libelletype;



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
     * Get the value of libelletype
     *
     * @return  string
     */ 
    public function getLibelletype()
    {
        return $this->libelletype;
    }

    /**
     * Set the value of libelletype
     *
     * @param  string  $libelletype
     *
     * @return  self
     */ 
    public function setLibelletype(string $libelletype)
    {
        $this->libelletype = $libelletype;

        return $this;
    }
}
