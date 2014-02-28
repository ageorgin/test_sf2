<?php
namespace Ageorgin\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of TestRestController
 *
 * @author ageorgin
 */
class TestRestController extends Controller{
    public function getUsersAction() {
        $data = array('id' => 1, 'name' => 'ageorgin');
        $view = new \FOS\RestBundle\View\View($data);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
    
    public function getUserAction($id) {
        
    }
}
