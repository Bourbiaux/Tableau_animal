<?php

namespace CRUD\PlatformBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="CRUD\PlatformBundle\Repository\TypeRepository")
 */
class Type
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
     * *@Assert\NotBlank(message="Le nom du type est obligatoire")
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * @var string
     * @ORM\Column(name="description",type="text")
     *
     * @Assert\Length(max = 400,maxMessage="La Description ne doit pas comprendre plus de 400 caractères")
     * @Assert\NotBlank(message="La description du type est obligatoire")
     */
    private $description;

    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Type
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Type
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
}
