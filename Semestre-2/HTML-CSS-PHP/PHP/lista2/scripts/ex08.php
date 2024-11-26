<?php
$idade = $_POST["idade"];

function verificarCategoria($idade) {
    if ($idade >= 5 && $idade <= 7) {
        return "Infantil A";
    } elseif ($idade >= 8 && $idade <= 10) {
        return "Infantil B";
    } elseif ($idade >= 11 && $idade <= 13) {
        return "Juvenil A";
    } elseif ($idade >= 14 && $idade <= 17) {
        return "Juvenil B";
    } elseif ($idade >= 18) {
        return "Adulto";
    } else {
        return "Idade inválida para nadador";
    }
}

if (is_numeric($idade) && $idade > 0) {
    $categoria = verificarCategoria($idade);
    echo "<h1>Resultado:</h1>";
    echo "<p>A categoria do nadador é: <strong>$categoria</strong></p>";
} else {
    echo "<p>Por favor, insira uma idade válida.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
