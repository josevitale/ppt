<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 08/06/18
 * Time: 18:08
 */

namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class PartidoRepository extends EntityRepository
{
    public function findAllPartidosOrdenadosPorFecha()
    {
        return $this->createQueryBuilder('p')
           ->join('p.equipoLocal', 'l')
           ->join('p.equipoVisitante', 'v')
           ->join('p.agrupamiento', 'a')
           ->orderBy('p.fecha')
           ->getQuery()
           ->getResult();
    }
}
