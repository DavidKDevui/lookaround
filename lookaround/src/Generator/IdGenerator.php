<?php

namespace App\Generator;
use Doctrine\ORM\Id\AbstractIdGenerator;

class IdGenerator extends AbstractIdGenerator
{
    public function generate(\Doctrine\ORM\EntityManager $em, $entity)
    {
        $id = rand(10000000, 99999999);
        while ($em->find(get_class($entity), $id)) {
            $id = rand(10000000, 99999999);
        }
        return $id;
    }
}
