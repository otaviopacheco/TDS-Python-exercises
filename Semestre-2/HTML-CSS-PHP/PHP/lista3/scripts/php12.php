<?php
$hora = $_POST["hora"];
$minuto = $_POST["minuto"];
function conversao12($hora, $minuto) {
    $periodo = 'A';  // Assume-se A.M. por padrão
    if ($hora >= 12) {
        $periodo = 'P';  // Se a hora for 12 ou maior, é P.M.
    }
    if ($hora > 12) {
        $hora -= 12;  // Converte horas maiores que 12 para o formato 12h
    } elseif ($hora == 0) {
        $hora = 12;  // Se a hora for 0 (meia-noite), deve ser 12 A.M.
    }
    return [$hora, $minuto, $periodo];
}
function horario($hora, $minuto, $periodo) {
    echo "O horário em 12 horas é: $hora:$minuto ";
    echo $periodo == 'A' ? "A.M." : "P.M.";
}
list($horaConvertida, $minutoConvertido, $periodo) = conversao12($hora, $minuto);
horario($horaConvertida, $minutoConvertido, $periodo);
?>
