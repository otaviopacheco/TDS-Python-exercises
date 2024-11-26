<?php
$altura = $_POST["altura"];
$sexo = $_POST["sexo"];

function calcularPesoIdeal($altura, $sexo) {
    if ($sexo == "masculino") {
        return 72.7 * $altura - 58;
    } elseif ($sexo == "feminino") {
        return 62.1 * $altura - 44.7;
    } else {
        return "Sexo inválido.";
    }
}

if (is_numeric($altura) && $altura > 0) {
    $pesoIdeal = calcularPesoIdeal($altura, $sexo);
    echo "<h1>Resultado:</h1>";
    echo "<p>O peso ideal para uma pessoa de $altura metros de altura e sexo $sexo é: <strong>$pesoIdeal kg</strong></p>";
} else {
    echo "<p>Por favor, insira uma altura válida.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
