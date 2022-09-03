<?php
$num1 = $_POST['num1']; //Variavel que irá receber o valor recebido do formulário
$num2 = $_POST['num2']; //Variavel que irá receber o valor recebido do form
$calculo = $_POST['opcoes']; // pegara as opções dos botões a selecionar

switch($calculo){ // Aqui ele realizará uma série de comparações em relação a operação inserida pelo usuário
    case 'adicao':
        $resultado = $num1 + $num2;
        echo $resultado;
        break;
    case 'subtracao': 
        $resultado = $num1 - $num2;
        echo "<pre> O resultado é: $resultado </pre>";
        break;
    case 'multiplicacao':  
        $resultado = $num1 * $num2;
        echo $resultado;
        break;
    case 'divisao':
        $resultado = $num1 / $num2;
        echo $resultado;
        break;
    default:
    echo "Selecione uma opção";
    }
