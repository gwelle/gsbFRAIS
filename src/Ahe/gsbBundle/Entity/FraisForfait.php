<?php

namespace Ahe\gsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraisforfait
 *
 * @ORM\Table(name="FraisForfait")
 * @ORM\Entity
 */
class FraisForfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FicheFrais", mappedBy="idFraisForfait")
     */
    private $idvisiteur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idvisiteur = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return FraisForfait
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return FraisForfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Add idvisiteur
     *
     * @param \Ahe\gsbBundle\Entity\FicheFrais $idvisiteur
     * @return FraisForfait
     */
    public function addIdvisiteur(\Ahe\gsbBundle\Entity\FicheFrais $idvisiteur)
    {
        $this->idvisiteur[] = $idvisiteur;

        return $this;
    }

    /**
     * Remove idvisiteur
     *
     * @param \Ahe\gsbBundle\Entity\FicheFrais $idvisiteur
     */
    public function removeIdvisiteur(\Ahe\gsbBundle\Entity\FicheFrais $idvisiteur)
    {
        $this->idvisiteur->removeElement($idvisiteur);
    }

    /**
     * Get idvisiteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }
}
