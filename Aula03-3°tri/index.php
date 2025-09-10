<html>
    <head>
        <title>Aula 03 -PHP</title>
    </head>
    <body>
        <?php
            $nome1="Kayo Magnani Menezes";
            $nome2="Isabelly Binda";

            $n1=10;
            $n2=2;
            $soma= $n1 + $n2;
            
            
            echo "Meu nome é " .$nome1 ." e minha dupla é " .$nome2;
            echo "<br>Meu nome é $nome1 e minha dupla é $nome2";
            echo "<br><br> A soma de $n1 + $n2 = $soma";
            echo "<br><br> A subtração de $n1 e $n2 é igual a: " .($n1 - $n2). ".";
            echo "<br><br> A multiplicação de $n1 e $n2 é igual a: " .($n1 * $n2). ".";
            echo "<br><br> A divisão de $n1 e $n2 é igual a: " .($n1 / $n2). ".";
            echo "<br><br> O resto da divisão de $n1 e $n2 é igual a: " .($n1 % $n2). ".";
        ?>
    </body>
</html>
