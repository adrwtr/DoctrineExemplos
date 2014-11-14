<?php
use Doctrine\Common\Collections\ArrayCollection;

class Municipio
{    
    protected $cd_municipio;    
    protected $ds_uf;
    protected $ds_municipio;
    protected $arrBairros;

    
    public function __construct()
    {
      $this->arrBairros = new ArrayCollection();
    }    



    /**
     * Gets the value of cd_municipio.
     *
     * @return mixed
     */
    public function getCdMunicipio()
    {
        return $this->cd_municipio;
    }

    /**
     * Sets the value of cd_municipio.
     *
     * @param mixed $cd_municipio the cd municipio
     *
     * @return self
     */
    public function setCdMunicipio($cd_municipio)
    {
        $this->cd_municipio = $cd_municipio;

        return $this;
    }

    /**
     * Gets the value of ds_uf.
     *
     * @return mixed
     */
    public function getDsUf()
    {
        return $this->ds_uf;
    }

    /**
     * Sets the value of ds_uf.
     *
     * @param mixed $ds_uf the ds uf
     *
     * @return self
     */
    public function setDsUf($ds_uf)
    {
        $this->ds_uf = $ds_uf;

        return $this;
    }

    /**
     * Gets the value of ds_municipio.
     *
     * @return mixed
     */
    public function getDsMunicipio()
    {
        return $this->ds_municipio;
    }

    /**
     * Sets the value of ds_municipio.
     *
     * @param mixed $ds_municipio the ds municipio
     *
     * @return self
     */
    public function setDsMunicipio($ds_municipio)
    {
        $this->ds_municipio = $ds_municipio;

        return $this;
    }

    public function getArrBairros()
    {
        return $this->arrBairros;
    }
}