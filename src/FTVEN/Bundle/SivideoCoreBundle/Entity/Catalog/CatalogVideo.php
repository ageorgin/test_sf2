<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Entity\Catalog;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog_video")
 */
class CatalogVideo {
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Catalog")
     * @ORM\JoinColumn(name="catalog_id", referencedColumnName="id")
     */
    private $catalog;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="FTVEN\bundle\SivideoCoreBundle\Entity\Assets\Video")
     * @ORM\JoinColumn(name="video_id", referencedColumnName="id")
     */
    private $video;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="FTVEN\bundle\SivideoCoreBundle\Entity\Assets\Variant")
     * @ORM\JoinColumn(name="variant_id", referencedColumnName="id")
     */
    private $variant;
    
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
