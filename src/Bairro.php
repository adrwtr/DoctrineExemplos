<?php
use Doctrine\Common\Collections\ArrayCollection;

class Bairro
{    
   protected $cd_bairro;
   protected $ds_uf;
   protected $ds_bairro;
   protected $objMunicipio;
   protected $cd_municipio;

    /**
     * Gets the value of cd_bairro.
     *
     * @return mixed
     */
    public function getCdBairro()
    {
        return $this->cd_bairro;
    }

    /**
     * Sets the value of cd_bairro.
     *
     * @param mixed $cd_bairro the cd bairro
     *
     * @return self
     */
    public function setCdBairro($cd_bairro)
    {
        $this->cd_bairro = $cd_bairro;

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
     * Gets the value of ds_bairro.
     *
     * @return mixed
     */
    public function getDsBairro()
    {
        return $this->ds_bairro;
    }

    /**
     * Sets the value of ds_bairro.
     *
     * @param mixed $ds_bairro the ds bairro
     *
     * @return self
     */
    public function setDsBairro($ds_bairro)
    {
        $this->ds_bairro = $ds_bairro;

        return $this;
    }

    /**
     * Gets the value of objMunicipio.
     *
     * @return mixed
     */
    public function getObjMunicipio()
    {
        return $this->objMunicipio;
    }

    /**
     * Sets the value of objMunicipio.
     *
     * @param mixed $objMunicipio the obj municipio
     *
     * @return self
     */
    public function setObjMunicipio($objMunicipio)
    {
        $this->objMunicipio = $objMunicipio;
        
        $this->setCdMunicipio(
           $objMunicipio->getCdMunicipio()
        );

        return $this;
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
}
