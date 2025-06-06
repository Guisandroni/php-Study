
<?php
echo "Hello World" . PHP_EOL;
var_dump('teste');
var_dump(123);
$array = ['name' => 'guilherme','age' => '24','city' => 'ibiúna'];
var_dump($array['name']);

echo $soma = 10 + 20 . PHP_EOL;
echo $substracao = 10 - 20 . PHP_EOL;
echo $multplicacao = 10 * 20 . PHP_EOL;
echo $divisao = 10 / 20 . PHP_EOL;
echo $modulo = 10 % 20 . PHP_EOL;
echo $exponenciacao = 10 ** 20 . PHP_EOL;

// Operadores Bitwise permitem a avaliação e modificação de bits específicos em um tipo inteiro.

//     E &
//     OU |
//     OU exclusivo ^
//     Não ~
//     Deslocar à esquerda <<
//     Deslocar à direita >>
// Comparando valores usando formato binario
    echo 'Comparando valores com operadores relacionais' . PHP_EOL;
    echo 10 & 20 . PHP_EOL;
    echo 10 | 20 . PHP_EOL;
    echo 10 ^ 20 . PHP_EOL;
    echo ~10 . PHP_EOL;
    echo 10 << 20 . PHP_EOL;
    echo 10 >> 20 . PHP_EOL;

    echo "operados em arrays" . PHP_EOL;
    print_r($array);
// + unir arrays, == , != ou <> diferenca entre array, 

    $comando = `pwd` . PHP_EOL;
    echo "$comando";

    foreach ( $array as $data)
    {
        echo $data;
    }
?>  