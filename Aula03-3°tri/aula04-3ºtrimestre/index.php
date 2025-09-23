<html>
    <head>
        <title>Aula04-PHP</title>
    </head>
    <body>
        <?php

        $n1=$_GET["a"];
        $n2=$_GET["b"];

        echo " A soma de $n1 e $n2 é igual a: " .($n1 + $n2). ".";
        echo "<br>A multiplicação de $n1 e $n2 é igual a: " .($n1 * $n2). ".";
        echo "<br>A divisão de $n1 e $n2 é igual a: " .($n1 / $n2). ".";
        echo "<br>A subtração de $n1 e $n2 é igual a: " .($n1 - $n2). ".";
        echo "<br>O resto da dvisão de $n1 e $n2 é igual a: " .($n1 % $n2). ".";

        ?>
    </body>
</html>
