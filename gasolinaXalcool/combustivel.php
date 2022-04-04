<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DE COMBUSTIVEL</title>
</head>
<body>
    <form action="" method="post">

    <label for="gasolina">gasolina</label>
    <input type="text" name="gasolina">

    <br><br>

    <label for="alcool">alcool</label>
    <input type="text" name="alcool">

    <br><br>

    <input type="submit">

    </form>

    <?php

    if ($_POST){
        $gasolina =$_POST['gasolina'];
        $alcool =$_POST['alcool'];
        $resultado;

        $resultado = ($alcool/$gasolina);


       if ($resultado < 0.7){
       echo 'coloca alcool';
       }




       else{
        echo 'coloca gasolina';
        }

    }

    ?>
    
</body>
</html>