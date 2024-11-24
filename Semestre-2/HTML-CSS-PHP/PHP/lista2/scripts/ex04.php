<?php
    // Receber os valores de a, b e c
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Função para calcular as raízes
    function calcularBhaskara($a, $b, $c, &$raiz1, &$raiz2) {
        // Calcular o discriminante (delta)
        $delta = $b * $b - 4 * $a * $c;

        // Verificar o valor de delta e calcular as raízes
        if ($delta > 0) {
            // Duas raízes reais e distintas
            $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
            $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
            return true;
        } elseif ($delta == 0) {
            // Uma raiz real e única
            $raiz1 = -$b / (2 * $a);
            return true;
        } else {
            // Delta negativo (raízes complexas)
            return false;
        }
    }

    // Variáveis para armazenar as raízes
    $raiz1 = $raiz2 = null;

    // Verificar se é possível calcular as raízes
    if (calcularBhaskara($a, $b, $c, $raiz1, $raiz2)) {
        echo "<h2>Resultados:</h2>";
        if ($raiz1 !== $raiz2) {
            echo "As raízes são distintas: $raiz1 e $raiz2.";
        } else {
            echo "A raiz é única: $raiz1.";
        }
    } else {
        echo "<h2>Não existem raízes reais para a equação.</h2>";
    }
?>
