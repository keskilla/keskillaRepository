<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 02/11/2017
 * Time: 23:35
 */

namespace BctBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

    /**
     * Items
     *
     * @ORM\Table(name="items")
     * @ORM\Entity(repositoryClass="BctBundle\Repository\ItemsRepository")
     */
class Items
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="contenue", type="string")
     */
   
    private $contenue;

    /**
     * @ORM\ManyToOne(targetEntity="Tcc_sous_cat", inversedBy="items")
     * @ORM\JoinColumn(name="tcc_sous_cat_id", referencedColumnName="id")
     */
    private $Tcc_sous_cat; //clé étrangere

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * @param mixed $contenue
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;
    }

    

    /**
     * @return mixed
     */
    public function getTccSousCat()
    {
        return $this->Tcc_sous_cat;
    }

    /**
     * @param \BctBundle\Entity\Tcc_sous_cat $Tcc_sous_cat
     * @param mixed $Tcc_sous_cat
     */
    public function setTccSousCat(\BctBundle\Entity\Tcc_sous_cat $Tcc_sous_cat)
    {
        $this->Tcc_sous_cat = $Tcc_sous_cat;
    }
    

    /**
     * @var string
     *
     * @ORM\Column(name="avantage", type="string", length=2000)
     */
    private $avantage;

    /**
     * @var string
     *
     * @ORM\Column(name="inconvenient", type="string", length=2000)
     */
    private $inconvenient;

    
    /**
     * @return string
     */
    public function getAvantage()
    {
        return $this->avantage;
    }

    /**
     * @param string $avantage
     */
    public function setAvantage($avantage)
    {
        $this->avantage = $avantage;
    }

    /**
     * @return string
     */
    public function getInconvenient()
    {
        return $this->inconvenient;
    }

    /**
     * @param string $inconvenient
     */
    public function setInconvenient($inconvenient)
    {
        $this->inconvenient = $inconvenient;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=2000)
     */
    private $detail;

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @ORM\OneToMany(targetEntity="Media_items", mappedBy="item")
     * @ORM\JoinColumn(nullable=false)
     */

    private $medias;
    
    public function __construct()
    {
        $this->medias = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param mixed $media
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;
    }
    
    
    
}