<?php

namespace PrixyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PrixyBundle\Entity;

/**
 * ligne_competence
 *
 * @ORM\Table(name="ligne_competence")
 * @ORM\Entity(repositoryClass="PrixyBundle\Repository\ligne_competenceRepository")
 */
class ligne_competence
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;


    /**
     * @ORM\ManyToOne(targetEntity="details_formation",inversedBy="lignes_formations")
     * @ORM\JoinColumn(name="details_formation_id", referencedColumnName="id")
     */
    private $details_formation;

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
     *
     * @return ligne_competence
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
     * Set detailsFormation
     *
     * @param \PrixyBundle\Entity\details_formation $detailsFormation
     *
     * @return ligne_competence
     */
    public function setDetailsFormation(\PrixyBundle\Entity\details_formation $detailsFormation = null)
    {
        $this->details_formation = $detailsFormation;
    
        return $this;
    }

    /**
     * Get detailsFormation
     *
     * @return \PrixyBundle\Entity\details_formation
     */
    public function getDetailsFormation()
    {
        return $this->details_formation;
    }
}
