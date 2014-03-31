<?php
namespace FTVEN\Bundle\SivideoCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        $view = new \FOS\RestBundle\View\View($hosts);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
}
