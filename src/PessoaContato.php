<?php
class PessoaContato
{
    protected $cd_contato;
    protected $cd_pessoa;
    protected $objPessoa;
    protected $ds_contato;
    protected $cd_tipo;

    public function getObjPessoa()
    {
        return $this->objPessoa;
    }

    public function getCdPessoa()
    {
        return $this->cd_pessoa;
    }

    public function getCdContato()
    {
        return $this->cd_contato;
    }

    public function getDsContato()
    {
        return $this->ds_contato;
    }

    public function getCdTipo()
    {
        return $this->cd_tipo;
    }

    public function setObjPessoa( Pessoa $objPessoa )
    {
        $this->objPessoa = $objPessoa;
        
        $this->setCdPessoa(
           $objPessoa->getCdPessoa()
        );
    }

    public function setDsContato( $ds_contato )
    {
        $this->ds_contato = $ds_contato;
    }

    public function setCdTipo( $cd_tipo )
    {
        $this->cd_tipo = $cd_tipo;
    }

    public function setCdPessoa( $cd_pessoa )
    {
        $this->cd_pessoa = $cd_pessoa;
    }


}