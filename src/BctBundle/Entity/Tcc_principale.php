<?php

namespace BctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcc_principale
 *
 * @ORM\Table(name="tcc_principale")
 * @ORM\Entity(repositoryClass="BctBundle\Repository\Tcc_principaleRepository")
 */
class Tcc_principale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
// une tcc_principale posséde une image, pas de tcc sans image
    /**
     * @ORM\OneToOne(targetEntity="Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_bct", type="string", length=255)
     */
    private $nomBct;

    /**
     * @var int
     *
     * @ORM\Column(name="priorite", type="integer")
     */
    private $priorite;

    /**
     * @var string
     *
     * @ORM\Column(name="def_fr", type="string", length=10000)
     */
    private $defFr;

    /**
     * @var string
     *
     * @ORM\Column(name="def_en", type="string", length=10000)
     */
    private $defEn;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomBct
     *
     * @param string $nomBct
     *
     * @return Tcc_principale
     */
    public function setNomBct($nomBct)
    {
        $this->nomBct = $nomBct;

        return $this;
    }

    /**
     * Get nomBct
     *
     * @return string
     */
    public function getNomBct()
    {
        return $this->nomBct;
    }

    /**
     * Set priorite
     *
     * @param integer $priorite
     *
     * @return Tcc_principale
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;

        return $this;
    }

    /**
     * Get priorite
     *
     * @return int
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set defFr
     *
     * @param string $defFr
     *
     * @return Tcc_principale
     */
    public function setDefFr($defFr)
    {
        $this->defFr = $defFr;

        return $this;
    }

    /**
     * Get defFr
     *
     * @return string
     */
    public function getDefFr()
    {
        return $this->defFr;
    }

    /**
     * Set defEn
     *
     * @param string $defEn
     *
     * @return Tcc_principale
     */
    public function setDefEn($defEn)
    {
        $this->defEn = $defEn;

        return $this;
    }

    /**
     * Get defEn
     *
     * @return string
     */
    public function getDefEn()
    {
        return $this->defEn;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

}

