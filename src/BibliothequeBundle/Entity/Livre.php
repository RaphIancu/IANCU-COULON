<?php
namespace BibliothequeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Livre
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */    
    private $titre;

    /**
     * @ORM\Column(type="string",length=2000),
     * @Assert\Length(
     *      min = 100,
     *      minMessage = "Vous pouvez décrire un peu plus ce livre, encore un petit effort ! (100 caractères minimum")
     */    
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @Assert\NotBlank(message="Veuillez renseigner la catégorie")
     */    
    private $categorie;

    /**
     * @ORM\ManyToMany(targetEntity="Autheur")
     */    
    private $autheurs;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->autheurs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     * @return Livre
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
     * Set description
     *
     * @param string $description
     * @return Livre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set categorie
     *
     * @param \BibliothequeBundle\Entity\Categorie $categorie
     * @return Livre
     */
    public function setCategorie(\BibliothequeBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \BibliothequeBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add autheurs
     *
     * @param \BibliothequeBundle\Entity\Autheur $autheurs
     * @return Livre
     */
    public function addAutheur(\BibliothequeBundle\Entity\Autheur $autheurs)
    {
        $this->autheurs[] = $autheurs;

        return $this;
    }

    /**
     * Remove autheurs
     *
     * @param \BibliothequeBundle\Entity\Autheur $autheurs
     */
    public function removeAutheur(\BibliothequeBundle\Entity\Autheur $autheurs)
    {
        $this->autheurs->removeElement($autheurs);
    }

    /**
     * Get autheurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAutheurs()
    {
        return $this->autheurs;
    }
}
