<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratPro
 *
 * @ORM\Table(name="contrat_pro", indexes={@ORM\Index(name="IDX_8D70909F76C50E4A", columns={"proprietaire_id"}), @ORM\Index(name="IDX_8D70909FF7AF57BA", columns={"bienpro_id"})})
 * @ORM\Entity
 */
class ContratPro
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
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=50, nullable=false)
     */
    private $duree;

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
     * @var \Bien
     *
     * @ORM\ManyToOne(targetEntity="Bien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bienpro_id", referencedColumnName="id")
     * })
     */
    private $bienpro;


}
