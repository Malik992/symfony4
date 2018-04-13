<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservePro
 *
 * @ORM\Table(name="reserve_pro", indexes={@ORM\Index(name="IDX_5BE703DF76C50E4A", columns={"proprietaire_id"}), @ORM\Index(name="IDX_5BE703DFF7AF57BA", columns={"bienpro_id"})})
 * @ORM\Entity
 */
class ReservePro
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
     * @ORM\Column(name="datereservation", type="datetime", nullable=false)
     */
    private $datereservation;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proprietaire_id", referencedColumnName="id")
     * })
     */
    private $proprietaire;

    /**
     * @var \BienPro
     *
     * @ORM\ManyToOne(targetEntity="BienPro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bienpro_id", referencedColumnName="id")
     * })
     */
    private $bienpro;



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
     * Get the value of datereservation
     *
     * @return  \DateTime
     */ 
    public function getDatereservation()
    {
        return $this->datereservation;
    }

    /**
     * Set the value of datereservation
     *
     * @param  \DateTime  $datereservation
     *
     * @return  self
     */ 
    public function setDatereservation(\DateTime $datereservation)
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    /**
     * Get the value of etat
     *
     * @return  bool
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @param  bool  $etat
     *
     * @return  self
     */ 
    public function setEtat(bool $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of proprietaire
     *
     * @return  \Proprietaire
     */ 
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @param  \Proprietaire  $proprietaire
     *
     * @return  self
     */ 
    public function setProprietaire(\Proprietaire $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get the value of bienpro
     *
     * @return  \BienPro
     */ 
    public function getBienpro()
    {
        return $this->bienpro;
    }

    /**
     * Set the value of bienpro
     *
     * @param  \BienPro  $bienpro
     *
     * @return  self
     */ 
    public function setBienpro(\BienPro $bienpro)
    {
        $this->bienpro = $bienpro;

        return $this;
    }
}
