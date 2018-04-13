<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", indexes={@ORM\Index(name="IDX_6034999319EB6921", columns={"client_id"}), @ORM\Index(name="IDX_60349993BD95B80F", columns={"bien_id"})})
 * @ORM\Entity
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="datecontrat", type="datetime", nullable=false)
     */
    private $datecontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer", nullable=false)
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=false)
     */
    private $duree;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \Bien
     *
     * @ORM\ManyToOne(targetEntity="Bien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bien_id", referencedColumnName="id")
     * })
     */
    private $bien;



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
     * Get the value of bien
     *
     * @return  \Bien
     */ 
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set the value of bien
     *
     * @param  \Bien  $bien
     *
     * @return  self
     */ 
    public function setBien(\Bien $bien)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get the value of client
     *
     * @return  \Client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @param  \Client  $client
     *
     * @return  self
     */ 
    public function setClient(\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of duree
     *
     * @return  string
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @param  string  $duree
     *
     * @return  self
     */ 
    public function setDuree(string $duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of caution
     *
     * @return  int
     */ 
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set the value of caution
     *
     * @param  int  $caution
     *
     * @return  self
     */ 
    public function setCaution(int $caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get the value of datecontrat
     *
     * @return  \DateTime
     */ 
    public function getDatecontrat()
    {
        return $this->datecontrat;
    }

    /**
     * Set the value of datecontrat
     *
     * @param  \DateTime  $datecontrat
     *
     * @return  self
     */ 
    public function setDatecontrat(\DateTime $datecontrat)
    {
        $this->datecontrat = $datecontrat;

        return $this;
    }
}
