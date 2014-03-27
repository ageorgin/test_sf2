<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Assets;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog_target")
 */
class CatalogTarget {
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="FTVEN\Bundle\SivideoCoreBundle\Entity\Catalog\Catalog")
     * @ORM\JoinColumn(name="catalog_id", referencedColumnName="id")
     */
    private $catalog;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="FTVEN\Bundle\SivideoCoreBundle\Entity\Catalog\Target")
     * @ORM\JoinColumn(name="target_id", referencedColumnName="id")
     */
    private $target;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Variant")
     * @ORM\JoinColumn(name="variant_id", referencedColumnName="id")
     */
    private $variant;
}
