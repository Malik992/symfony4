<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien", indexes={@ORM\Index(name="IDX_45EDC386924DD2B5", columns={"localite_id"}), @ORM\Index(name="IDX_45EDC386677134B4", columns={"typebien_id"})})
 * @ORM\Entity
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombien", type="string", length=50, nullable=false)
     */
    private $nombien;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_loc", type="integer", nullable=false)
     */
    private $prixLoc;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="idparentbien", type="integer", nullable=false)
     */
    private $idparentbien;

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
     * @var \Localite
     *
     * @ORM\ManyToOne(targetEntity="Localite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localite_id", referencedColumnName="id")
     * })
     */
    private $localite;
   /**
 * @ORM\OneToMany(targetEntity="App\Entity\Image", mappedBy="bien", orphanRemoval=true)
 */
private $images;
  

    private $reservations;
   
  
    private $contrats;

  

    /**
     * Set nombien
     *
     * @param string $nombien
     *
     * @return Bien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;

        return $this;
    }

    /**
     * Get nombien
     *
     * @return string
     */
    public function getNombien()
    {
        return $this->nombien;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix_loc
     *
     * @param integer $prix_loc
     *
     * @return Bien
     */
    public function setPrix_loc($prix_loc)
    {
        $this->prix_loc = $prix_loc;

        return $this;
    }

    /**
     * Get prix_loc
     *
     * @return int
     */
    public function getPrix_loc()
    {
        return $this->prix_loc;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idparentbien
     *
     * @param integer $idparentbien
     *
     * @return Bien
     */
    public function setIdparentbien($idparentbien)
    {
        $this->idparentbien = $idparentbien;

        return $this;
    }

    /**
     * Get idparentbien
     *..
     * @return int
     */
    public function getIdparentbien()
    {
        return $this->idparentbien;
    }


    /**
     * Set localite
     *
     * @param \App\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\App\Entity\Localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }
  

    /**
     * Get localite
     *
     * @return \App\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set typebien
     *
     * @param \App\Entity\Typebien $typebien
     *
     * @return Bien
     */
    public function setTypebien(\App\Entity\Typebien $typebien = null)
    {
        $this->typebien = $typebien;

        return $this;
    }

    /**
     * Get typebien
     *
     * @return \App\Entity\Typebien
     */
    public function getTypebien()
    {
        return $this->typebien;
    }

    /**
     * Add image
     *
     * @param \App\Entity\Image $images
     *
     * @return Bien
     */
    public function addImages(\App\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \App\Entity\Image $images
     */
    public function removeImage(\App\Entity\Image $image)
    {
        $this->images->removeElement($images);
    }


    /**
     * Add reservation
     *
     * @param \App\Entity\Image $reservation
     *
     * @return Bien
     */
    public function addReservation(\App\Entity\Image $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \App\Entity\Image $reservation
     */
    public function removeReservation(\App\Entity\Image $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add contrat
     *
     * @param \App\Entity\Reservation $contrat
     *
     * @return Bien
     */
    public function addContrat(\App\Entity\Reservation $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \App\Entity\Reservation $contrat
     */
    public function removeContrat(\App\Entity\Reservation $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }
    public function __toString(){
        return $this->nombien;
    }

    


/**
 * Get the value of images
 */ 
public function getImages()
{
return $this->images;
}

/**
 * Set the value of images
 *
 * @return  self
 */ 
public function setImages($images)
{
$this->images = $images;

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


