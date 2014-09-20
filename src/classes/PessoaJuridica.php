<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 20/09/14
 * Time: 11:45
 */

namespace src\classes;
use src\classes\Cliente;
use src\interfaces\ClienteEnderecoCobrancaInterface;
use src\interfaces\ClienteImportanciaInterface;

class PessoaJuridica extends Cliente implements ClienteImportanciaInterface, ClienteEnderecoCobrancaInterface{

    protected $sede;

    /**
     * @param mixed $sede
     */
    public function setSede($sede)
    {
        $this->sede = $sede;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSede()
    {
        return $this->sede;
    }

    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

    public function getEnderecoCobranca(){
        return $this->enderecoCobranca;
    }

    public function getCidadeCobranca(){
        return $this->cidadeCobranca;
    }

} 