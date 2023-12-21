<?php

class Heroi
{
    //Definindo a classe do heroi
    public $nome;
    public $idade;
    public $tipo;

    public function __construct($nome, $idade, $tipo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->tipo = $tipo;
    }

    public function atacar()
    {
        switch ($this->tipo) {
            case 'mago':
                $ataque = 'usou magia';
                break;
            case 'guerreiro':
                $ataque = 'usou espada';
                break;
            case 'monge':
                $ataque = 'usou artes marciais';
                break;
            case 'ninja':
                $ataque = 'usou shuriken';
                break;
            default:
                $ataque = 'usou um ataque indefinido';
                break;
        }

        return "O {$this->tipo} atacou usando {$ataque}";
    }
}

// Criação de um herói (pode ser personalizado conforme necessário)
$heroi = new Heroi('Herói', 25, 'mago');
// Realiza o ataque e retorna a mensagem
$mensagem = $heroi->atacar();
// Resposta em formato JSON
$response = ['message' => $mensagem];
echo json_encode($response);
?>