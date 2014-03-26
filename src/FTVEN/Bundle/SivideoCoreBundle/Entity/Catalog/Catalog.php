<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Catalog;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog")
 */
class Catalog {
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
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $geoblocking;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $drm;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $mandat;
}
