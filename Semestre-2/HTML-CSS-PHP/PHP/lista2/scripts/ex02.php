<?php 
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$opt = $_POST["option"];
$mediaHarmonica = harmonica($nota1, $nota2, $nota3, $opt);
$mediaArit = aritmetica($nota1, $nota2, $nota3, $opt);
$mediaPond = ponderada($nota1, $nota2, $nota3, $opt); 
echo $mediaHarmonica;
echo $mediaArit;
echo $mediaPond;






function aritmetica($nota1,$nota2, $nota3, $opt){
    if ($opt == "Arit" ){
        $media = ($nota1 + $nota2 + $nota3 ) / 3;
        return "A média aritmética é: $media";
    }
}









function harmonica($nota1,$nota2, $nota3, $opt){
    if ($opt == "Harm"){
        $mediaHarm = 2 / ((1 / $nota1) + (1 / $nota2) + ( 1 / $nota3 ));
        return "A média harmônica é: $mediaHarm";
    }
}






function ponderada($nota1, $nota2, $nota3, $opt){
    if ($opt == "Pond"){
        $div = $nota1+$nota2+$nota3;
        $media = (($nota1 * 1) + ($nota2 * 2) + ($nota3 *3) )/ 6;
        return $media;
    }
}


?>