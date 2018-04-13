<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="numeropiece", type="string", length=50, nullable=false)
     */
    private $numeropiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomclient", type="string", length=50, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="telclient", type="string", length=15, nullable=false)
     */
    private $telclient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseclient", type="string", length=50, nullable=false)
     */
    private $adresseclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailclient", type="string", length=100, nullable=true)
     */
    private $emailclient;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;



    /**
     * Get the value of password
     *
     * @return  string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of emailclient
     *
     * @return  string|null
     */ 
    public function getEmailclient()
    {
        return $this->emailclient;
    }

    /**
     * Set the value of emailclient
     *
     * @param  string|null  $emailclient
     *
     * @return  self
     */ 
    public function setEmailclient($emailclient)
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    /**
     * Get the value of adresseclient
     *
     * @return  string
     */ 
    public function getAdresseclient()
    {
        return $this->adresseclient;
    }

    /**
     * Set the value of adresseclient
     *
     * @param  string  $adresseclient
     *
     * @return  self
     */ 
    public function setAdresseclient(string $adresseclient)
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    /**
     * Get the value of telclient
     *
     * @return  string
     */ 
    public function getTelclient()
    {
        return $this->telclient;
    }

    /**
     * Set the value of telclient
     *
     * @param  string  $telclient
     *
     * @return  self
     */ 
    public function setTelclient(string $telclient)
    {
        $this->telclient = $telclient;

        return $this;
    }

    /**
     * Get the value of nomclient
     *
     * @return  string
     */ 
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set the value of nomclient
     *
     * @return  self
     */ 
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get the value of numeropiece
     *
     * @return  string
     */ 
    public function getNumeropiece()
    {
        return $this->numeropiece;
    }

    /**
     * Set the value of numeropiece
     *
     * @return  self
     */ 
    public function setNumeropiece( $numeropiece)
    {
        $this->numeropiece = $numeropiece;

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
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
