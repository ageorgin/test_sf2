<?php

namespace Ageorgin\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ageorgin\Bundle\TestBundle\Entity\Diffusion;

class DefaultController extends Controller
{
    /**
     * @Route("/test/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $serializer = $this->container->get('jms_serializer');
        $diffusion = new Diffusion();
        $diffusion->id = 1;
        $diffusion->dateDiffusion = date('d/m/Y');
        $diffusion->titre = $name;
	return new \Symfony\Component\HttpFoundation\Response($serializer->serialize($diffusion, 'json'));
    }
}
