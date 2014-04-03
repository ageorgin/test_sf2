<?php

namespace FTVEN\Bundle\SivideoCoreBundle\Service;

use Doctrine\ORM\EntityManager;

/**
 * Description of EntityLoaderService
 *
 * @author AGGIN
 */
class EntityLoaderService {
    /**
     *
     * @var type @var EntityManager
     */
    private $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    /**
     * @param type $entityName
     * @param type $fields
     * @param type $id
     */
    public function load($entityName, $fields = null, $id = null) {
       if(null !== $fields) {
            $query = $this->buildQuery($entityName, $fields, $id);
            $data = $query->getResult();
            
            if(null !== $id && count($data) > 0) {
                $data = $data[0];
            }
        } else {
            $repository = $this->em->getRepository($entityName);
            $data = (null !== $id) ? $repository->find($id) : $repository->findAll();
        }
        
        return count($data) > 0 ? $data : null;
    }
    
    /**
     * @param type $entityName
     * @param type $fields
     * @param type $id
     * @return \Doctrine\ORM\Query
     */
    private function buildQuery($entityName, $fields = null, $id = null) {
        $fields = explode(',', $fields);
        $itemSelect = '';
        foreach($fields as $idx => $field) {
            $itemSelect .= ($idx > 0 ? ', ':'');
            $itemSelect .= 'elt.'.$field;
        }

        $query = $this->em->createQuery('select ' . $itemSelect . ' FROM ' . $entityName . ' elt ' . (null !== $id ? 'where elt.id = :id' : ''));
        if(null !== $id) {
            $query->setParameter('id', $id);
        }
        
        return $query;
    }
}
