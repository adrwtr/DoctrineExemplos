<?php
namespace repositorios;

use Doctrine\ORM\EntityRepository;

/**
 * repositorios para a entidade Pessoas 
 */
class Pessoas extends EntityRepository {
   
    public function getPessoa($cd_pessoa)
    {
        $objQB = $this->_em
            ->createQueryBuilder();

         $objQB->select('p')
            ->from('Pessoa', 'p')
            ->where('p.cd_pessoa = :cd_pessoa')
            ->setParameter('cd_pessoa', $cd_pessoa );

        $query = $objQB->getQuery();
        return $query->getResult();
    }

    public function getCarrosFromPessoa($cd_pessoa)
    {
      $objQB = $this->_em
            ->createQueryBuilder();

      $objQB->select('c.nm_carro')
            ->from('Pessoa', 'p')
            ->innerJoin('p.arrCarros', 'c', \Doctrine\ORM\Query\Expr\Join::ON )
            ->where('p.cd_pessoa = :cd_pessoa')
            ->setParameter('cd_pessoa', $cd_pessoa );

        $query = $objQB->getQuery();

        echo "<BR>". "<BR>";
         echo ($objQB->getDQL()) . "<BR>". "<BR>";
         echo ($query->getSQL()). "<BR>". "<BR>";
         echo ($query->getParameter(0)->getValue() ). "<BR>". "<BR>";
        

        return $query->getResult();
     }

}