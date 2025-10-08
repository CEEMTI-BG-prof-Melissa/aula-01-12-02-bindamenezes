
<html> 
    <head>
        <title> Aula 07-PHP</title>
    </head>
    <body>
        <?php
            // Aula07
            //Isabelly B. Kayo Menezes
            // 08/10/2025
            $num=10;
            echo"O valor inicial é $num.";
            $num+=5;
            echo "<br><br>A soma de 10 com 5 é igual a: $num";
            $num-=2;
            echo "<br>A subtração de 10 com 2 é igual a: $num";
            $num*=3;
            echo "<br>A multiplicação de 10 com 3 é igual a: $num";
            $num/=2;
            echo "<br>A divisão de 10 com 2 é igual a: $num <hr>";
            echo "Pré-incremento: .".(++$num);
            echo "<br>Pós-incremento: ".($num++) ;
            echo "<br>Pré-decremento: .".(--$num);
            echo "<br>Pós-decremento: ".($num--);
            echo "<br>O valor final é: $num.";
        



        ?>
    </body>
</html>
