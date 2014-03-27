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
        $variant  = $em->find('FTVEN\Bundle\SivideoCoreBundle\Entity\Assets\Variant', 1);
        
        var_dump($variant->getHost()->getName());
        
        return array('name' => 'AZERTY '.$name);
    }
}
