<?php

// impressoes mais usadas

echo "strings e " . 123 . PHP_EOL;
echo "<br> <hr>";

$numeros = [22, 55, 44.5, 85];
echo var_dump($numeros)  . PHP_EOL;

echo "<br> <hr>";

// Variaveis 

$linguagem = "PHP";
echo "meu codigo de estudos de $linguagem";

echo "<br> <hr>";

// Constantes 

define('nomeConstante', 123);
var_dump(nomeConstante);
echo "<br> <hr>";

define('outraConstante', 4567890);
var_dump(outraConstante);
echo "<br> <hr>";

const maisConstante = "bla bla bla";
echo maisConstante;
echo "<br> <hr>";

// arrays 

$contasCorrentes = [
    115515151 => [
        'titular' => 'alberto',
        'saldo' => 250
    ],
    645115115 => [
        'titular' => 'maria',
        'saldo' => 2505541
    ],
    414654168 => [
        'titular' => 'joaquim',
        'saldo' => 25069
    ],
];

// manipulação de arrays

$nome = ['carlos', 'especializa ti', 'company'];

$name = 'calros';
$company = 'especializati';
$year = 2021;

$infoCompany = [
    $name,
    $company,
    $year
];

var_dump(is_array($infoCompany));
echo "<br> <hr>";

$empresa = [
    'nome' => 'empresa tal',
    'funcao' => 'tecnologia',
    'ano' => 2015
];

$outraEmpresa = [
    'cursos' => [
        'php',
        'js',
        'vue',
    ],

    'total_cursos' => 26,

];

// unir arrays

$tdsEmpresas = array_merge($empresa , $outraEmpresa);

echo '<pre>';
var_dump($tdsEmpresas);
echo "<br> <hr>";

//remover ultimo elemento de um array

$carrinho = ['arroz', 'feijao', 'shampoo', 'macarrão', 'ovos'];
array_pop($carrinho);
var_dump($carrinho);
echo "<br> <hr>";

//remover primeiro elemento de um array

array_shift($carrinho);
var_dump($carrinho);
echo "<br> <hr>";

//remove elemento em qualquer posicao

unset($carrinho[1]);
var_dump($carrinho);
echo "<br> <hr>";

//adiciona elemento

array_push($carrinho , 'chocolate');
var_dump($carrinho);
echo "<br> <hr>";

//adiciona elemento no inicio do array

array_unshift($carrinho , 'MAÇÃ');
var_dump($carrinho);
echo "<br> <hr>";

// remover elementos duplicados

array_unshift($carrinho , 'MAÇÃ');
array_unshift($carrinho , 'mamao');
var_dump($carrinho);
echo "<br>";
$carrinho = array_unique($carrinho);
var_dump($carrinho);
echo "<br> <hr>";

// ordenar decrescente arrays

$alunos = [
    0 => 'carlos', 
    1 => 'amanda', 
    2 => 'eloisa', 
    3 => 'barbara', 
    4 => 'daniel'];

arsort($alunos);
var_dump($alunos);
echo "<br> <hr>";

// ordenar de forma CRESCENTE

asort($alunos);
var_dump($alunos);
echo "<br> <hr>";

// ordena de forma CRECENTE E ORGANIZA AS KEYS

sort($alunos);
var_dump($alunos);
echo "<br> <hr>";

// retorna o ULTIMO elemento de um array

$ages = [5 , 10, 20 , 17 , 18 , 52];

echo end($ages);
echo "<br> <hr>";

// filtros em valores de um array 

$agesFiltro = array_filter($ages , function($ages){

    return $ages >= 18;
});

var_dump($agesFiltro);
echo "<br> <hr>";

$marcas = ['Adidas', 'Puma', 'Nike', 'Vans'];

$marcas = array_map(function($marcas){

    return strtoupper($marcas);
} , $marcas);

var_dump($marcas);
echo "<br> <hr>";

// CONCATENAÇÃO

$var1 = 'isso';
$var2 = 'aquilo';

echo $var1 . ' ' . $var2;
echo "<br> <hr>";

$meuNome = 'Mayara';
$minhaFuncao = 'Desenvolvedora Web';

echo "Olá me chamo $meuNome , atuo como $minhaFuncao";
echo "<br> <hr>";