<?php

namespace src\classes;
use src\classes\Cliente;
use src\interfaces\ClienteEnderecoCobrancaInterface;
use src\interfaces\ClienteImportanciaInterface;

class PessoaFisica extends Cliente implements ClienteImportanciaInterface, ClienteEnderecoCobrancaInterface{

    protected $celular;

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
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