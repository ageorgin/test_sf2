<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="format")
 */
class Format {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Variant", mappedBy="format")
     */
    private $variants;
    
    public function __contruct() {
        $this->variants = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function getVariants() {
        return $this->variants;
    }

    public function setVariants($variants) {
        $this->variants = $variants;
    }
}
