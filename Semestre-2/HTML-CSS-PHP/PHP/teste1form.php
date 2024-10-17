<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "scripts/form.php" method="post">
        <input type="text" placeholder="Insira um numero" name="number">
        <input type="submit" name="btn2">
    </form>
    <form action="scripts/ex3.php" method="post">
        <input type="text" name="number1" placeholder="Insira do numero">
        <input type="text" name="number2" placeholder="segundo do numero">
        <select name="operacao" id="">
            <p>calculadora</p>
            <option value="+" name="">+</option>
            <option value="-" name="">-</option>
            <option value="/" name="">/</option>
            <option value="*" name="">*</option>
        </select>
        <input type="submit">
    </form>
    <form  method="post'">
        <p>maior menor</p>
        <input type="text" name="input1" placeholder="Insira do numero">
        <input type="text" name="input2" placeholder="segundo do numero">
        <input type="submit" value="" name="MaiorMenor">
    </form>

</body>
</html>

<!-- if(isset($_POST["MaiorMenor"])){
    $inp1 = $_POST["input1"];
    $inp2 = $_POST["input2"];
        if($inp1 > $inp2){
            echo "O primeiro numero é maior";
        }elseif($inp1 < $inp2){
            echo "O segundo numero é maior";
        }

} -->


