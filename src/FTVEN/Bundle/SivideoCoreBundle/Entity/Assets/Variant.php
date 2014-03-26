<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="variant")
 */
class Variant {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Host")
     * @ORM\JoinColumn(name="host_id", referencedColumnName="id")
     */
    private $host;
    
    /**
     * @ORM\ManyToOne(targetEntity="Format")
     * @ORM\JoinColumn(name="format_id", referencedColumnName="id")
     */
    private $format;
    
    /**
     * @ORM\ManyToOne(targetEntity="Coding")
     * @ORM\JoinColumn(name="coding_id", referencedColumnName="id")
     */
    private $coding;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $status;
    
}
