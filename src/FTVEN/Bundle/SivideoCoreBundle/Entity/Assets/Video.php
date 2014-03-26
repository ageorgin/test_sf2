<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="video")
 */
class Video {
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
     * @ORM\Column(type="integer")
     */
    private $duration;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $published;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $code;
    
    /**
     * @ORM\Column(type="string", length=32, name="diffusion_code")
     */
    private $diffusionCode;
    
    /**
     * @ORM\Column(type="string", length=255, name="thumb_url")
     */
    private $thumbUrl;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $type;
}
