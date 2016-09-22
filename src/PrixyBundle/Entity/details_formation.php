<?php

namespace PrixyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * details_formation
 *
 * @ORM\Table(name="details_formation")
 * @ORM\Entity(repositoryClass="PrixyBundle\Repository\details_formationRepository")
 */
class details_formation
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
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
    */
    private $titre;

    /**
     * @ORM\OneToMany(targetEntity="ligne_competence", mappedBy="details_formation")
     */
    private $lignes_formations;


    /**
     * @ORM\ManyToOne(targetEntity="formation",inversedBy="details_formation")
     * @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $formation;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return details_formation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lignes_formations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lignesFormation
     *
     * @param \PrixyBundle\Entity\ligne_competence $lignesFormation
     *
     * @return details_formation
     */
    public function addLignesFormation(\PrixyBundle\Entity\ligne_competence $lignesFormation)
    {
        $this->lignes_formations[] = $lignesFormation;
    
        return $this;
    }

    /**
     * Remove lignesFormation
     *
     * @param \PrixyBundle\Entity\ligne_competence $lignesFormation
     */
    public function removeLignesFormation(\PrixyBundle\Entity\ligne_competence $lignesFormation)
    {
        $this->lignes_formations->removeElement($lignesFormation);
    }

    /**
     * Get lignesFormations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLignesFormations()
    {
        return $this->lignes_formations;
    }

    /**
     * Set formation
     *
     * @param \PrixyBundle\Entity\formation $formation
     *
     * @return details_formation
     */
    public function setFormation(\PrixyBundle\Entity\formation $formation = null)
    {
        $this->formation = $formation;
    
        return $this;
    }

    /**
     * Get formation
     *
     * @return \PrixyBundle\Entity\formation
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
