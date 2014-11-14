<?php
use Doctrine\Common\Collections\ArrayCollection;

// src/Carro.php
class Carro
{    
    protected $cd_carro;    
    protected $nm_carro;
    protected $nm_marca;
    protected $arrPessoas;
    
    public function __construct()
    {
    
    }    

    public function getCdCarro()
    {
        return $this->cd_carro;
    }

    public function getNmCarro()
    {
        return $this->nm_carro;
    }

    public function setNmCarro( $name )
    {
        $this->nm_carro = $name;
    }

    public function getNmMarca()
    {
        return $this->nm_marca;
    }

    public function setNmMarca( $name )
    {
        $this->nm_marca = $name;
    }   

    public function adicionarPessoa($objPessoa)
    {   
        $this->arrPessoas[] = $objPessoa;
    }

    public function getPessoas()
    {
        return $this->arrPessoas;
    } 
}