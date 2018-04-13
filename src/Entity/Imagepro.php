<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Imagepro
 *
 * @ORM\Table(name="imagepro", indexes={@ORM\Index(name="IDX_305036A2F7AF57BA", columns={"bienpro_id"})})
 * @ORM\Entity
 */
class Imagepro
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
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
     */
    private $image;

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

    /**
     * Get the value of image
     *
     * @return  string
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  string  $image
     *
     * @return  self
     */ 
    public function setImage(string $image)
    {
        $this->image = $image;

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
