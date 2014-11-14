<?php
use Doctrine\Common\Collections\ArrayCollection;

// src/Product.php
class Pessoa
{    
    protected $cd_pessoa;    
    protected $nm_pessoa;
    protected $arrPessoasContatos;    
    protected $arrCarros;

    public function __construct()
    {
      $this->arrPessoasContatos = new ArrayCollection();  
      $this->arrCarros = new ArrayCollection();  
    }    

    public function getCdPessoa()
    {
        return $this->cd_pessoa;
    }

    public function getNmPessoa()
    {
        return $this->nm_pessoa;
    }

    public function setNmPessoa( $name )
    {
        $this->nm_pessoa = $name;
    }


    public function adicionarContato($objPessoaContato)
    {
        $objPessoaContato->setObjPessoa($this);
        $this->arrPessoasContatos[] = $objPessoaContato;
    }

    public function getContatos()
    {
        return $this->arrPessoasContatos;
    }


    public function adicionarCarro($objCarro)
    {        
        $this->arrCarros[] = $objCarro;
    }

    public function getCarros()
    {
        return $this->arrCarros;
    }

}