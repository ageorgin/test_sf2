<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="host")
 */
class Host {
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
     * @ORM\Column(type="string", length=255)
     */
    private $pattern;
    
    /**
     * @ORM\OneToMany(targetEntity="Variant", mappedBy="host")
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

    public function getPattern() {
        return $this->pattern;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPattern($pattern) {
        $this->pattern = $pattern;
    }
    
    public function getVariants() {
        return $this->variants;
    }

    public function setVariants($variants) {
        $this->variants = $variants;
    }


}
