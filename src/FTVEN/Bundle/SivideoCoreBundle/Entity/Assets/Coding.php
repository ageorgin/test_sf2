<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;

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
}
