<?php

namespace PrixyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="PrixyBundle\Repository\formationRepository")
 */
class formation
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
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", nullable=true)
     */
    private $tarif;



    /**
     * @ORM\OneToMany(targetEntity="details_formation", mappedBy="formation")
     */
    private $details_formation;


    /**
     * @ORM\ManyToMany(targetEntity="theme", mappedBy="formation")
     */
    private $theme;

    /**
     * @ORM\ManyToMany(targetEntity="certification", mappedBy="formation")
     */
    private $certification;


    /**
     * @ORM\ManyToOne(targetEntity="session_formation", inversedBy="formation")
     * @ORM\JoinColumn(name="session_formation_id", referencedColumnName="id")
     */
    private $session_formation;


    /**
     * @ORM\ManyToOne(targetEntity="objectif", inversedBy="formation")
     * @ORM\JoinColumn(name="objectif_id", referencedColumnName="id")
     */
    private $objectif;


    /**
     * @ORM\ManyToMany(targetEntity="formation", mappedBy="myFriends")
     */
    private $requiert;

    /**
     * @ORM\ManyToMany(targetEntity="formation", inversedBy="requiert")
     * @ORM\JoinTable(name="necessiter",
     *      joinColumns={@ORM\JoinColumn(name="formation_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="requis_id", referencedColumnName="id")}
     *      )
     */
    private $estRequisPour;


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
     * Set duree
     *
     * @param integer $duree
     *
     * @return formation
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set tarif
     *
     * @param float $tarif
     *
     * @return formation
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    
        return $this;
    }

    /**
     * Get tarif
     *
     * @return float
     */
    public function getTarif()
    {
        return $this->tarif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->details_formation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add detailsFormation
     *
     * @param \PrixyBundle\Entity\details_formation $detailsFormation
     *
     * @return formation
     */
    public function addDetailsFormation(\PrixyBundle\Entity\details_formation $detailsFormation)
    {
        $this->details_formation[] = $detailsFormation;
    
        return $this;
    }

    /**
     * Remove detailsFormation
     *
     * @param \PrixyBundle\Entity\details_formation $detailsFormation
     */
    public function removeDetailsFormation(\PrixyBundle\Entity\details_formation $detailsFormation)
    {
        $this->details_formation->removeElement($detailsFormation);
    }

    /**
     * Get detailsFormation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetailsFormation()
    {
        return $this->details_formation;
    }

    /**
     * Add theme
     *
     * @param \PrixyBundle\Entity\theme $theme
     *
     * @return formation
     */
    public function addTheme(\PrixyBundle\Entity\theme $theme)
    {
        $this->theme[] = $theme;
    
        return $this;
    }

    /**
     * Remove theme
     *
     * @param \PrixyBundle\Entity\theme $theme
     */
    public function removeTheme(\PrixyBundle\Entity\theme $theme)
    {
        $this->theme->removeElement($theme);
    }

    /**
     * Get theme
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Add certification
     *
     * @param \PrixyBundle\Entity\certification $certification
     *
     * @return formation
     */
    public function addCertification(\PrixyBundle\Entity\certification $certification)
    {
        $this->certification[] = $certification;
    
        return $this;
    }

    /**
     * Remove certification
     *
     * @param \PrixyBundle\Entity\certification $certification
     */
    public function removeCertification(\PrixyBundle\Entity\certification $certification)
    {
        $this->certification->removeElement($certification);
    }

    /**
     * Get certification
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Set sessionFormation
     *
     * @param \PrixyBundle\Entity\session_formation $sessionFormation
     *
     * @return formation
     */
    public function setSessionFormation(\PrixyBundle\Entity\session_formation $sessionFormation = null)
    {
        $this->session_formation = $sessionFormation;
    
        return $this;
    }

    /**
     * Get sessionFormation
     *
     * @return \PrixyBundle\Entity\session_formation
     */
    public function getSessionFormation()
    {
        return $this->session_formation;
    }

    /**
     * Set objectif
     *
     * @param \PrixyBundle\Entity\objectif $objectif
     *
     * @return formation
     */
    public function setObjectif(\PrixyBundle\Entity\objectif $objectif = null)
    {
        $this->objectif = $objectif;
    
        return $this;
    }

    /**
     * Get objectif
     *
     * @return \PrixyBundle\Entity\objectif
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Add requiert
     *
     * @param \PrixyBundle\Entity\formation $requiert
     *
     * @return formation
     */
    public function addRequiert(\PrixyBundle\Entity\formation $requiert)
    {
        $this->requiert[] = $requiert;
    
        return $this;
    }

    /**
     * Remove requiert
     *
     * @param \PrixyBundle\Entity\formation $requiert
     */
    public function removeRequiert(\PrixyBundle\Entity\formation $requiert)
    {
        $this->requiert->removeElement($requiert);
    }

    /**
     * Get requiert
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequiert()
    {
        return $this->requiert;
    }

    /**
     * Add estRequisPour
     *
     * @param \PrixyBundle\Entity\formation $estRequisPour
     *
     * @return formation
     */
    public function addEstRequisPour(\PrixyBundle\Entity\formation $estRequisPour)
    {
        $this->estRequisPour[] = $estRequisPour;
    
        return $this;
    }

    /**
     * Remove estRequisPour
     *
     * @param \PrixyBundle\Entity\formation $estRequisPour
     */
    public function removeEstRequisPour(\PrixyBundle\Entity\formation $estRequisPour)
    {
        $this->estRequisPour->removeElement($estRequisPour);
    }

    /**
     * Get estRequisPour
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstRequisPour()
    {
        return $this->estRequisPour;
    }
}
