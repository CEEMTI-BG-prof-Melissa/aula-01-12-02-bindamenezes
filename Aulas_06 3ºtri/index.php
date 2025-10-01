<html>
    <head>
            <title>aula 06 php</title>
    </head>
    <body>
        <h3>Operadores de Atribuição</h3>
        <hr>
        <?php
            $a=2;
            $b=$a+5;
            echo "<br>A é igual a $a e B é igual a $b. ";

            $a+=3;
            echo "<br>Agora A é igual a $a. ";

            $b+=8;
            echo"<br>Agora B é igual a $b. ";

            $b-=5;
            echo"<br>Agora B é igual a $b. ";

            echo"<hr>";

            $b*=2;
            echo "<br>Agora B multiplicado por 2 é igual a $b. ";

            $b/=10;
            echo "<br>Agora B dividido por 10 é igual a $b. ";

            $b%=3;
            echo "<br>O resto da divisão de B com 3 é igual a $b. ";

            $b.=10;
            echo"<br>Contatenado o valor de B com o númermo 10 é igual a $b.";


        ?>
        
    </body>
</html>
