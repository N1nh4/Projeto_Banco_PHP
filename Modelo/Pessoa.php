<?php

class Pessoa
{
    private Cpf $cpf;
    private string $nome;


    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 letras";
            exit();
        }

    }
}