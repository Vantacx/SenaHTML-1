<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue; 
        }
        .cuadrado{
            width: 50px;
            height: 50px;
            background-color: red;
            position: fixed;
        }
        .referencia{
            background-color: mediumslateblue;
            padding: 30px;
            height: 150vh;
        }
        .contenedor{
            background-color: lightsalmon;
            width: 70%;
            margin: auto;
            height: 300px;
            margin-top: 50vh;
            transform: translateY(-50%)
        }
        .circulo{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: limegreen;
            position: absolute;
            top: 0;
        }
    </style>
</head>
<body>
    <div class="referencia">
        <div class="cuadrado"></div>
        <div class="contenedor">
            <div class="circulo"></div>
        </div>
    </div>
</body>
</html>