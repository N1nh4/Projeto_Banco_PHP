<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function exibirSaldo() : float
    {
        return $this->saldo . PHP_EOL;
    }

    public function exibirNomeTitular() : string
    {
        return $this->titular->exibirNome();
    }
    public function exibirCpf() : string
    {
        return $this->titular->exibirCpf();
    }

    public static function exibirNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }


}












//$primeiraConta = new Conta();
//$primeiraConta->cpfTitular = '051.967.355-77';
//$primeiraConta->nomeTitular = 'Alana Carolina Pereira Abreu';
//$primeiraConta->saldo = 11000;
//
//var_dump($primeiraConta);
//
//$segundaConta = new Conta();
//$segundaConta->cpfTitular = '072.825.505-73';
//$segundaConta->nomeTitular = 'Gabriela Micheli Leal';
//$segundaConta->saldo = 600;

//var_dump($segundaConta);

