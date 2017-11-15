<?php

namespace BctBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tcc_sous_cat
 *
 * @ORM\Table(name="tcc_sous_cat")
 * @ORM\Entity(repositoryClass="BctBundle\Repository\Tcc_sous_catRepository")
 */
class Tcc_sous_cat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    //une sous_cat peut avoir plusieurs tcc_principale
    /**
     * @ORM\ManyToOne(targetEntity="Tcc_principale", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Tcc_principale;


    /**
     * @var string
     *
     * @ORM\Column(name="nom_sc", type="string", length=255)
     */
    private $nomSc;

    /**
     * @var string
     *
     * @ORM\Column(name="description_fr", type="string", length=2000)
     */
    private $descriptionFr;


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
     * Set nomSc
     *
     * @param string $nomSc
     *
     * @return Tcc_sous_cat
     */
    public function setNomSc($nomSc)
    {
        $this->nomSc = $nomSc;

        return $this;
    }

    /**
     * Get nomSc
     *
     * @return string
     */
    public function getNomSc()
    {
        return $this->nomSc;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     *
     * @return Tcc_sous_cat
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * @return mixed
     */
    public function getTccPrincipale()
    {
        return $this->Tcc_principale;
    }

    /**
     * @param mixed $Tcc_principale
     */
    public function setTccPrincipale($Tcc_principale)
    {
        $this->Tcc_principale = $Tcc_principale;
    }

    // ...

    /**
     * @ORM\OneToMany(targetEntity="Items", mappedBy="Tcc_sous_cat")
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
    
}

