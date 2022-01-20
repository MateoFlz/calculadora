<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcualdora</title>
    <style>
        .container{
            justify-content: center;
            align-content: center;
            margin: 50px auto;
            width: 450px;
            height: 380px;
            border: 1px solid;
            border-radius: 25px;
        }

        .header-body{
            text-align: center;
            font-size: 32px;
            font-family: sans-serif;
        }

        .children{
            margin-top: 5px;
            padding: 15px;
            text-align: center;
            align-content: center;
            justify-items: center;
        }

        .input-pantalla{
            width: 120px;
            height: 50px;
            font-size: 30px;
        }

        .input-total{
            width: 220px;
            height: 50px;
            font-size: 30px;
        }
        
        .select{
            height: 3 0px;
            font-size: 20px;
        }

        .btn{
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-body">
            <h3>Calcualdora</h3>
            
<?php

?>

        </div>
        <form action="<?php echo RAIZ . 'calcular/calcular'; ?>" method="post">
            <div class="children">
                    <input type="text" class="input-pantalla" name="numero-uno">
                    <select name="operacion" id="" class="select">
                        <option value="Suma"> + </option>
                        <option value="Resta"> - </option>
                        <option value="Multiplicacion"> x </option>
                        <option value="Division"> / </option>
                    </select>
                    <input type="text" class="input-pantalla" name="numero-dos">
            </div>
            <div class="children">
                <button type="submit" class="btn"> = </button>
            </div>
        </form>
        <div class="children">
            <input type="text" class="input-total" name="total" value="<?php if($datos){echo $datos;} ?>">
        </div>
    </div>
</body>
</html>