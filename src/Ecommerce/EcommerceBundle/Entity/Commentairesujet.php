<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentairesujet
 *
 * @ORM\Table(name="commentairesujet")
 * @ORM\Entity
 */
class Commentairesujet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;
        /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCom", type="datetime", nullable=false)
     */
    private $datecom;

    /**
     * @var \Sujet
     *
     * @ORM\ManyToOne(targetEntity="Sujet")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="sujet_id", referencedColumnName="id")
     * })
     */
    private $sujet;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

   public function __construct()
    {
        $this->datecom = new \DateTime();
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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentairesujet
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set datecom
     *
     * @param \DateTime $datecom
     * @return Commentairesujet
     */
    public function setDatecom($datecom)
    {
        $this->datecom = $datecom;

        return $this;
    }

    /**
     * Get datecom
     *
     * @return \DateTime 
     */
    public function getDatecom()
    {
        return $this->datecom;
    }

    /**
     * Set sujet
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Sujet $sujet
     * @return Commentairesujet
     */
    public function setSujet(\Ecommerce\EcommerceBundle\Entity\Sujet $sujet = null)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Sujet 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set user
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $user
     * @return Commentairesujet
     */
    public function setUser(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUser()
    {
        return $this->user;
    }
}
