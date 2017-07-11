<?php

namespace CRUD\PlatformBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * TabAnimal
 *
 * @ORM\Table(name="tab_animal")
 * @ORM\Entity(repositoryClass="CRUD\PlatformBundle\Repository\TabAnimalRepository")
 */
class TabAnimal
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
     * @ORM\Column(name="animal", type="string", length=50)
     *
     * @Assert\NotBlank(message="Le nom est obligatoire")
     *
     */
    private $animal;



    /**
     * @var string
     * @Assert\LessThan(4)
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;

    /**
     * @var Type
     *
     * @Assert\Valid()

     * @ORM\ManyToOne(targetEntity="Type",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set animal
     *
     * @param string $animal
     *
     * @return TabAnimal
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return string
     */
    public function getAnimal()
    {
        return $this->animal;
    }



    /**
     * Set description
     *
     * @param string $description
     *
     * @return TabAnimal
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
     * Set type
     *
     * @param \CRUD\PlatformBundle\Entity\Type $type
     *
     * @return TabAnimal
     */
    public function setType(\CRUD\PlatformBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \CRUD\PlatformBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }
}
