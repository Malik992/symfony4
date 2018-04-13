<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BienPro
 *
 * @ORM\Table(name="bien_pro", indexes={@ORM\Index(name="IDX_90623645924DD2B5", columns={"localite_id"}), @ORM\Index(name="IDX_90623645677134B4", columns={"typebien_id"}), @ORM\Index(name="IDX_9062364576C50E4A", columns={"proprietaire_id"})})
 * @ORM\Entity
 */
class BienPro
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="montantvoulu", type="integer", nullable=false)
     */
    private $montantvoulu;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="idparent", type="integer", nullable=false)
     */
    private $idparent;

    /**
     * @var \Typebien
     *
     * @ORM\ManyToOne(targetEntity="Typebien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typebien_id", referencedColumnName="id")
     * })
     */
    private $typebien;

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
     * @var \Localite
     *
     * @ORM\ManyToOne(targetEntity="Localite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localite_id", referencedColumnName="id")
     * })
     */
    private $localite;



    /**
     * Get the value of localite
     *
     * @return  \Localite
     */ 
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set the value of localite
     *
     * @param  \Localite  $localite
     *
     * @return  self
     */ 
    public function setLocalite(\Localite $localite)
    {
        $this->localite = $localite;

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
     * Get the value of typebien
     *
     * @return  \Typebien
     */ 
    public function getTypebien()
    {
        return $this->typebien;
    }

    /**
     * Set the value of typebien
     *
     * @param  \Typebien  $typebien
     *
     * @return  self
     */ 
    public function setTypebien(\Typebien $typebien)
    {
        $this->typebien = $typebien;

        return $this;
    }

    

    /**
     * Get the value of idparent
     *
     * @return  int
     */ 
    public function getIdparent()
    {
        return $this->idparent;
    }

    /**
     * Set the value of idparent
     *
     * @param  int  $idparent
     *
     * @return  self
     */ 
    public function setIdparent(int $idparent)
    {
        $this->idparent = $idparent;

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
     * Get the value of montantvoulu
     *
     * @return  int
     */ 
    public function getMontantvoulu()
    {
        return $this->montantvoulu;
    }

    /**
     * Set the value of montantvoulu
     *
     * @param  int  $montantvoulu
     *
     * @return  self
     */ 
    public function setMontantvoulu(int $montantvoulu)
    {
        $this->montantvoulu = $montantvoulu;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

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
}
