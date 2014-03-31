<?php
namespace FTVEN\Bundle\SivideoCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use JMS\Serializer\SerializationContext;
use FOS\RestBundle\Controller\Annotations\QueryParam;

/**
 * Description of RestController
 *
 * @author AGGIN
 */
class RestController extends Controller {
    /**
     * Réponse à l'appel API /hosts
     */
    public function getHostsAction() {
        $repository = $this->getDoctrine()
                ->getRepository('FTVENSivideoCoreBundle:Assets\Host');
        $hosts = $repository->findAll();
        $view = new \FOS\RestBundle\View\View($hosts);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
    
    
    /**
     * Réponse à l'appel API /hosts/{id}
     */
    public function getHostAction($id) {        
        $repository = $this->getDoctrine()
                ->getRepository('FTVENSivideoCoreBundle:Assets\Host');
        $hosts = $repository->find($id);
        if(null === $hosts) {
            throw new HttpException(404, 'No data');
        }
        $view = new \FOS\RestBundle\View\View($hosts);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
    
    /**
     * /hosts/{id}/variants
     */
    public function getHostVariantsAction($id) {
        $repository = $this->getDoctrine()
                ->getRepository('FTVENSivideoCoreBundle:Assets\Host');
        $hosts = $repository->find($id);
        if(null === $hosts) {
            throw new HttpException(404, 'No data');
        }
        
        $variants = $hosts->getVariants();
        $view = new \FOS\RestBundle\View\View($variants);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
}
