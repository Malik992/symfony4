<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_69E399D6289172D6", columns={"numpiece"}), @ORM\UniqueConstraint(name="UNIQ_69E399D6E270F6B9", columns={"email_pro"}), @ORM\UniqueConstraint(name="UNIQ_69E399D6D79B3EEC", columns={"codebanque"})})
 * @ORM\Entity
 */
class Proprietaire
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
     * @ORM\Column(name="numpiece", type="string", length=50, nullable=false)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcomplet", type="string", length=50, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adressepro", type="string", length=50, nullable=false)
     */
    private $adressepro;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_pro", type="string", length=15, nullable=false)
     */
    private $telPro;

    /**
     * @var string
     *
     * @ORM\Column(name="email_pro", type="string", length=100, nullable=false)
     */
    private $emailPro;

    /**
     * @var string
     *
     * @ORM\Column(name="codebanque", type="string", length=50, nullable=false)
     */
    private $codebanque;



    /**
     * Get the value of codebanque
     *
     * @return  string
     */ 
    public function getCodebanque()
    {
        return $this->codebanque;
    }

    /**
     * Set the value of codebanque
     *
     * @param  string  $codebanque
     *
     * @return  self
     */ 
    public function setCodebanque(string $codebanque)
    {
        $this->codebanque = $codebanque;

        return $this;
    }

    /**
     * Get the value of emailPro
     *
     * @return  string
     */ 
    public function getEmailPro()
    {
        return $this->emailPro;
    }

    /**
     * Set the value of emailPro
     *
     * @param  string  $emailPro
     *
     * @return  self
     */ 
    public function setEmailPro(string $emailPro)
    {
        $this->emailPro = $emailPro;

        return $this;
    }

    /**
     * Get the value of telPro
     *
     * @return  string
     */ 
    public function getTelPro()
    {
        return $this->telPro;
    }

    /**
     * Set the value of telPro
     *
     * @param  string  $telPro
     *
     * @return  self
     */ 
    public function setTelPro(string $telPro)
    {
        $this->telPro = $telPro;

        return $this;
    }

    /**
     * Get the value of adressepro
     *
     * @return  string
     */ 
    public function getAdressepro()
    {
        return $this->adressepro;
    }

    /**
     * Set the value of adressepro
     *
     * @param  string  $adressepro
     *
     * @return  self
     */ 
    public function setAdressepro(string $adressepro)
    {
        $this->adressepro = $adressepro;

        return $this;
    }

    /**
     * Get the value of nomcomplet
     *
     * @return  string
     */ 
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set the value of nomcomplet
     *
     * @param  string  $nomcomplet
     *
     * @return  self
     */ 
    public function setNomcomplet(string $nomcomplet)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get the value of numpiece
     *
     * @return  string
     */ 
    public function getNumpiece()
    {
        return $this->numpiece;
    }

    /**
     * Set the value of numpiece
     *
     * @param  string  $numpiece
     *
     * @return  self
     */ 
    public function setNumpiece(string $numpiece)
    {
        $this->numpiece = $numpiece;

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
