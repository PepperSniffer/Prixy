<?php

namespace PrixyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="PrixyBundle\Repository\themeRepository")
 */
class theme
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
     * @ORM\ManyToMany(targetEntity="formation", inversedBy="theme")
     * @ORM\JoinTable(name="formation_theme")
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return theme
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
     * Constructor
     */
    public function __construct()
    {
        $this->formation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formation
     *
     * @param \PrixyBundle\Entity\formation $formation
     *
     * @return theme
     */
    public function addFormation(\PrixyBundle\Entity\formation $formation)
    {
        $this->formation[] = $formation;
    
        return $this;
    }

    /**
     * Remove formation
     *
     * @param \PrixyBundle\Entity\formation $formation
     */
    public function removeFormation(\PrixyBundle\Entity\formation $formation)
    {
        $this->formation->removeElement($formation);
    }

    /**
     * Get formation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
