<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table("produits")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitsRepository")
 */
class Produits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="description", type="text")
     */
    
    private $description;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date", nullable=false)
     */
    private $dateAjout;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;
    /**
     * @var integer
     *
     * @ORM\Column(name="promotion", type="integer")
     */
    private $promotion=0;
  

        
    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string")
     */
    private $marque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="catalogue", type="boolean")
     */
    private $catalogue=false;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbVente", type="integer", nullable=true)
     */
    private $nbVente=0;
    
     public function __construct()
    {
        $this->dateAjout = new \DateTime();
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Produits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Image $image
     * @return Produits
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set categorie
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categories $categorie
     * @return Produits
     */
    public function setCategorie(\Ecommerce\EcommerceBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    /**
     * Set marque
     *
     * @param string $marque
     * @return Produits
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produits
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
    
    
    /**
     * Set catalogue
     *
     * @param boolean $catalogue
     * @return Produits
     */
    public function setCatalogue($catalogue)
    {
        $this->catalogue = $catalogue;

        return $this;
    }

    /**
     * Get catalogue
     *
     * @return boolean 
     */
    public function getCatalogue()
    {
        return $this->catalogue;
    }
    
    /**
     * Set nbVente
     *
     * @param integer $nbVente
     * @return Produits
     */
    public function setNbVente($nbVente)
    {
        $this->nbVente = $nbVente;

        return $this;
    }
    
    /**
     * Get nbVente
     *
     * @return integer 
     */
    public function getNbVente()
    {
        return $this->nbVente;
    }
      /**
     * Get promotion
     *
     * @return integer 
     */
      public function getPromotion() {
        return $this->promotion;
    }
    
    /**
     * Set promotion
     *
     * @param integer $promotion
     * @return Produits
     */
    public function setPromotion($promotion) {
        $this->promotion = $promotion;
        return $this;
    }


    /**
     * Get dateAjout
     *
     * @return \DateTime 
     */
    public function getDateajout()
    {
        return $this->dateAjout;
    }
}
