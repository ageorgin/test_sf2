<?php
namespace FTVEN\Bundle\SivideoCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use JMS\Serializer\SerializationContext;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;

/**
 * Description of RestController
 *
 * @author AGGIN
 */
class RestController extends Controller {
    /**
     * Réponse à l'appel API /hosts
     * @QueryParam(name="fields", nullable=true)
     */
    public function getHostsAction(ParamFetcher $paramFetcher) {
        $fields = $paramFetcher->get('fields');
        $hosts = $this->get('ftven_sivideo_core.entity_loader')
                ->load('FTVENSivideoCoreBundle:Assets\Host', $fields);
        $view = new \FOS\RestBundle\View\View($hosts);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
    
    
    /**
     * Réponse à l'appel API /hosts/{id}
     * @QueryParam(name="fields", nullable=true)
     */
    public function getHostAction($id, ParamFetcher $paramFetcher) {        
        $fields = $paramFetcher->get('fields');

        $hosts = $this->get('ftven_sivideo_core.entity_loader')
                ->load('FTVENSivideoCoreBundle:Assets\Host', $fields, $id);
        
        if(null === $hosts) {
            throw new HttpException(404, 'No data');
        }
        $view = new \FOS\RestBundle\View\View($hosts);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
    
    /**
     * /hosts/{id}/variants
     * @QueryParam(name="fields", nullable=true)
     */
    public function getHostVariantsAction($id, ParamFetcher $paramFetcher) {
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
