<?php

namespace Ahe\gsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFraisHorsForfait
 *
 * @ORM\Table(name="LigneFraisHorsForfait", indexes={@ORM\Index(name="idVisiteur", columns={"idVisiteur", "mois"})})
 * @ORM\Entity(repositoryClass="Ahe\gsbBundle\Entity\LigneFraisHorsForfaitRepository.php)
 */
class LigneFraisHorsForfait
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
     * @ORM\Column(name="libelle", type="string", length=100, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var \FicheFrais
     *
     * @ORM\ManyToOne(targetEntity="FicheFrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="idVisiteur"),
     *   @ORM\JoinColumn(name="mois", referencedColumnName="mois")
     * })
     */
    private $idVisiteur;



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
     * Set libelle
     *
     * @param string $libelle
     * @return LigneFraisHorsForfait
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
     * Set date
     *
     * @param \DateTime $date
     * @return LigneFraisHorsForfait
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return LigneFraisHorsForfait
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
     * Set idVisiteur
     *
     * @param \Ahe\gsbBundle\Entity\FicheFrais $idVisiteur
     * @return LigneFraisHorsForfait
     */
    public function setIdVisiteur(\Ahe\gsbBundle\Entity\FicheFrais $idVisiteur = null)
    {
        $this->idVisiteur = $idVisiteur;
        return $this;
    }

    /**
     * Get idVisiteur
     *
     * @return \Ahe\gsbBundle\Entity\FicheFrais 
     */
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }
}
