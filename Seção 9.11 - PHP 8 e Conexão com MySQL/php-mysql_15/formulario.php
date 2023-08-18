<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formulário PDO</title>
    <style>
        body {
            background-color: black;
        }
        .wrapper{
            font-family: Arial, Helvetica, sans-serif;
            margin: 50px auto;
            padding: 30px;
            width: 500px;
            background-color: rgb(240,240,240);
            border-radius: 20px;
            border: 1px solid rgb(200,200,200);
        }
        .wrapper input[type="text"], input[type="email"]{
            font-size: 14px;
            width: 97%;
            padding: 10px 5px;
            margin-top: 5px;
            border: 0px;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 30px;
            border: 1px solid gray;
            border-radius: 10px;
            background-color: rgb(220,220,220);
        }
        input[type="submit"]:hover {
            background-color: rgb(200,200,250);
        }
        .wrapper div {
            margin-bottom: 20px;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <p class="text-center">REGISTO DE CLIENTES</p>
        <form action="tratar_original.php" method="post">
            <div>
                <label>Nome:</label>
                <input type="text" name="text_nome" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="text_email" required>
            </div>
            <div class="text-center">
                <input type="submit" value="GUARDAR">
            </div>
        </form>
    </div>

</body>
</html>







<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    18/08/2023
-->