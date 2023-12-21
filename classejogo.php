<?php

class Heroi
{
    public $nome;
    public $idade;
    public $tipo;
    public function __construct($nome, $idade, $tipo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->tipo = $tipo;    }

    public function atacar()
    {
        switch ($this->tipo) {
            case 'mago':
                $ataque = 'usando magia';
                break;
            case 'guerreiro':
                $ataque = 'usando espada';
                break;
            case 'monge':
                $ataque = 'usando artes marciais';
                break;
            case 'ninja':
                $ataque = 'usando shuriken';
                break;
            default:
                $ataque = 'usando um ataque indefinido';
                break;
        }

        return "O {$this->tipo} {$this->nome}, com {$this->idade} anos, atacou usando {$ataque}";
    }
}
$heroName = isset($_POST['heroName']) ? $_POST['heroName'] : 'Herói'; // Valor padrão se o nome não for fornecido
$heroAge = isset($_POST['heroAge']) ? $_POST['heroAge'] : 25; // Valor padrão se a idade não for fornecida
$heroType = isset($_POST['heroType']) ? $_POST['heroType'] : 'mago'; // Valor padrão se o tipo não for fornecido

// Criação de um herói com as informações fornecidas
$heroi = new Heroi($heroName, $heroAge, $heroType);

// Realiza o ataque e retorna a mensagem
$mensagem = $heroi->atacar();

// Resposta em formato JSON
$response = ['message' => $mensagem];
echo json_encode($response);
?>
