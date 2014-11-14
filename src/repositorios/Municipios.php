<?php
namespace repositorios;

use Doctrine\ORM\EntityRepository;

/**
 * repositorios para a entidade Municpios
 */
class Municipios extends EntityRepository {
   
    public function getBairrosFromUF($ds_uf)
    {
      $objQB = $this->_em
            ->createQueryBuilder();

      $objQB->select('m.cd_municipio, m.ds_uf, m.ds_municipio, b.ds_bairro')
            ->from('Municipio', 'm')
            ->innerJoin('m.arrBairros', 'b', \Doctrine\ORM\Query\Expr\Join::ON )
            ->where('m.ds_uf = :ds_uf')
            ->setParameter('ds_uf', $ds_uf );

        $query = $objQB->getQuery();


        return $query->getArrayResult();
     }

}