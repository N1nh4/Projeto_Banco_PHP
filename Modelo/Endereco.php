<?php

namespace Modelo;
class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function exibirCidade(): string
    {
        return $this->cidade;
    }

    public function exibirBairro(): string
    {
        return $this->bairro;
    }

    public function exibirRua(): string
    {
        return $this->rua;
    }

    public function exibirNumero(): string
    {
        return $this->numero;
    }


}










