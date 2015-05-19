<?php

namespace Ahe\gsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheFrais
 *
 * @ORM\Table(name="FicheFrais",indexes={@ORM\Index(name="idEtat",columns={"idEtat"}), 
 * @ORM\Index(name="IDX_1C4987DC1D06ADE3", columns={"idVisiteur"})})
 * @ORM\Entity
 */

/**
 * @ORM\Entity(repositoryClass="Ahe\gsbBundle\Entity\FicheFraisRepository")
 */
class FicheFrais
{
    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbJustificatifs", type="integer", nullable=true)
     */
    private $nbjustificatifs;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantvalide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtat", referencedColumnName="id")
     * })
     */
    private $idetat;

    /**
     * @var \Visiteur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idvisiteur", referencedColumnName="id")
     * })
     */
    private $idvisiteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FraisForfait", inversedBy="idvisiteur")
     */
    private $idFraisForfait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFraisForfait = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set mois
     *
     * @param string $mois
     * @return FicheFrais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set nbjustificatifs
     *
     * @param integer $nbjustificatifs
     * @return FicheFrais
     */
    public function setNbjustificatifs($nbjustificatifs)
    {
        $this->nbjustificatifs = $nbjustificatifs;

        return $this;
    }

    /**
     * Get nbjustificatifs
     *
     * @return integer 
     */
    public function getNbjustificatifs()
    {
        return $this->nbjustificatifs;
    }

    /**
     * Set montantvalide
     *
     * @param string $montantvalide
     * @return FicheFrais
     */
    public function setMontantvalide($montantvalide)
    {
        $this->montantvalide = $montantvalide;

        return $this;
    }

    /**
     * Get montantvalide
     *
     * @return string 
     */
    public function getMontantvalide()
    {
        return $this->montantvalide;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return FicheFrais
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set idetat
     *
     * @param \Ahe\gsbBundle\Entity\Etat $idetat
     * @return FicheFrais
     */
    public function setIdetat(\Ahe\gsbBundle\Entity\Etat $idetat = null)
    {
        $this->idetat = $idetat;

        return $this;
    }

    /**
     * Get idetat
     *
     * @return \Ahe\gsbBundle\Entity\Etat 
     */
    public function getIdetat()
    {
        return $this->idetat;
    }

    /**
     * Set idvisiteur
     *
     * @param \Ahe\gsbBundle\Entity\Visiteur $idvisiteur
     * @return FicheFrais
     */
    public function setIdvisiteur(\Ahe\gsbBundle\Entity\Visiteur $idvisiteur)
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    /**
     * Get idvisiteur
     *
     * @return \Ahe\gsbBundle\Entity\Visiteur 
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }

    /**
     * Add idFraisForfait
     *
     * @param \Ahe\gsbBundle\Entity\FraisForfait $idFraisForfait
     * @return FicheFrais
     */
    public function addIdFraisForfait(\Ahe\gsbBundle\Entity\FraisForfait $idFraisForfait)
    {
        $this->idFraisForfait[] = $idFraisForfait;

        return $this;
    }

    /**
     * Remove idFraisForfait
     *
     * @param \Ahe\gsbBundle\Entity\FraisForfait $idFraisForfait
     */
    public function removeIdFraisForfait(\Ahe\gsbBundle\Entity\FraisForfait $idFraisForfait)
    {
        $this->idFraisForfait->removeElement($idFraisForfait);
    }

    /**
     * Get idFraisForfait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFraisForfait()
    {
        return $this->idFraisForfait;
    }
}
