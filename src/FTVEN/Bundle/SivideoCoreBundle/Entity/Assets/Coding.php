<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="coding")
 */
class Coding {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $container;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $codec;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $bitrate;
    
    /**
     * @ORM\OneToMany(targetEntity="Variant", mappedBy="coding")
     */
    private $variants;
    
    public function __contruct() {
        $this->variants = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getContainer() {
        return $this->container;
    }

    public function getCodec() {
        return $this->codec;
    }

    public function getBitrate() {
        return $this->bitrate;
    }

    public function getVariants() {
        return $this->variants;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setContainer($container) {
        $this->container = $container;
    }

    public function setCodec($codec) {
        $this->codec = $codec;
    }

    public function setBitrate($bitrate) {
        $this->bitrate = $bitrate;
    }

    public function setVariants($variants) {
        $this->variants = $variants;
    }
}
