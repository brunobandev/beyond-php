<?php

/**
 * Ambas as terminologias referem-se a funções anônimas.
 * Função anônimas nada mais são que funções sem assinatura, ou seja, sem nome.
 * São definidas em qualquer lugar, e normalmente atribuídas a uma variavel ou utilizadas como callback.
 */

/**
 * Exemplo da sintaxe (Lambda)
*/

$name = function ($firstName) {
    return $firstName;
};

echo $name('Bruno') . PHP_EOL;

$fullName = function ($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
};

echo $fullName('Bruno', 'Bandeira') . PHP_EOL;

/**
 * Exemplo de sintaxe (Closure)
 * Closures podem interagir com variáveis externas, definidas no mesmo escopo.
 * Neste caso $lastName.
*/

$lastName = 'Bandeira';

$fullName = function ($firstName) use ($lastName) {
    return $firstName . ' ' . $lastName;
};

echo $fullName('Bruno') . PHP_EOL;

/**
 * Exemplo de Closure utilizada como callback
 */

$uppercase = true;
$closure = function ($attribute) use ($uppercase) {
    if ($uppercase) {
        $attribute = strtoupper($attribute);
    }
    return $attribute;
};

function firstName($message, Closure $callback)
{
    $parts = explode(' ', $message);

    return $callback($parts[0]);
}

$result_callback = firstName('Bruno Bandeira', $closure);
echo $result_callback . PHP_EOL;
