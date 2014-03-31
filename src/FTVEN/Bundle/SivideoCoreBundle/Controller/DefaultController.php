<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

//use FTVEN\Bundle\SivideoCoreBundle\Entity\Assets as FTVENAssets;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();
//        $format = $em->find('FTVEN\Bundle\SivideoCoreBundle\Entity\Assets\Format', 1);
        //$variant  = $em->find('FTVEN\Bundle\SivideoCoreBundle\Entity\Assets\Variant', 1);
        $host  = $em->find('FTVENSivideoCoreBundle:Assets\Host', 1);
        
        $variants = $host->getVariants();
        foreach($variants as $variant) {
            echo $variant->getId() . '<br/>';
        }
        
        //var_dump($host->getVariants());
        
        return array('name' => 'AZERTY '.$name);
    }
}
