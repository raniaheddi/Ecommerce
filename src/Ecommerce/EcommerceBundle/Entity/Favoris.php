<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\FavorisRepository")
 */
class Favoris {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Produit
     *
     * @ORM\ManyToMany(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     * })
     */
    private $produits;

    function __construct() {
        $this->produits = new ArrayCollection();
    }

    /**
     * AddProduit produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produits $produit
     */
    public function addProduit(\Ecommerce\EcommerceBundle\Entity\Produits $produit) {
        $this->produits[] = $produit;
    }

    /**
     * Remove produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produits $produit
     */
    public function removeProduit(\Ecommerce\EcommerceBundle\Entity\Produits $produit) {
        $this->produits->removeElement($produit);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produits $produit
     * @return Favoris
     */
    public function setProduits(\Ecommerce\EcommerceBundle\Entity\Produits $produit = null) {
        $this->produits = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Produits 
     */
    public function getProduits() {
        return $this->produits;
    }

    public function __toString() {
        return (string) $this->getId();
    }

}
