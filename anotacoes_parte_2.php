<?php

$num = 12;

if ($num == 12) {
    echo $num . ' - numero doze';
} else {
    echo 'o numero esta incorreto.';
};
echo "<br> <hr> <pre>";

// foreach

$letras = ['a', 'b', 'c', 'd', 'e'];

foreach ($letras as $letra) {
    echo $letra . PHP_EOL;
}
echo "<br> <hr>";

// FUNÇÕES

function imprimeAlgo() : string {
    // não é uma boa pratica imprimir algo dentro de uma fuction
    return 'a fuction funcionou :)';
};

echo imprimeAlgo();
echo "<br> <hr>";

function soma(int $n1 , int $n2 ): int{
    return $n1 + $n2 ; 
} 

echo soma(11 , 15);
echo "<br> <hr>";

function outraSoma(int $num1 , int $num2 , int $taxa = 2): int {
    return ($num1 + $num2) * $taxa;
};

echo outraSoma(1, 2);
echo "<br> <hr>";

// variaveis em funções e uso global

$multa = 2; 

function calculaMulta(int $num1 , int $num2): int {
    global $multa;
    // para retornar mais de um valor é necessario retorna-los como um array
    return ($num1 + $num2) * $multa;
    $teste = 1;
};

echo $teste;
echo calculaMulta(1 , 2);
echo "<br> <hr>";

// FUNÇÕES UTEIS 

//converter para maiusculo
$nome = 'Mayara vieira';

echo strtoupper($nome);
echo "<br> <hr>";

//converter para minusculo
echo strtolower($nome);
echo "<br> <hr>";

//transformar o primeiro caractere em maiusculo
echo ucfirst($nome);
echo "<br> <hr>";

//transforma a primeira letra de cada palavra em maiusculo
echo ucwords($nome);
echo "<br> <hr>";

//tirar espaços do inicio 
$coisa = '      alguma coisa aqui    ';
var_dump($coisa);
echo "<br>";
var_dump(ltrim($coisa));
echo "<br>";

//tirar espaços do fim
var_dump(rtrim($coisa));
echo "<br>";

//tirar espaços do inicio e final
var_dump(trim($coisa));
echo "<br> <hr>";

// tranforma string em array atraves de um caractere definido
$estado = 'Brasilia/DF';
$arrayEstado = explode('/' , $estado);
var_dump($arrayEstado);
echo "<br> <hr>";

// separa valores de um arry entre caracteres
$arrayTeste = [1 , 2 , 3 , 4 ];
echo implode($arrayTeste, ' - ');
echo "<br> <hr>";

// substituir parte de uma string / texto
$site = 'www.google.com.br';
echo str_replace('www.' , 'https://www.', $site );
echo "<br> <hr>";

// retorna parte de uma string
echo substr($site , 0 , 4);
echo "<br>";
echo substr($site , -7);
echo "<br> <hr>";

// conta quantidade de caracteres de uma string
echo strlen($site);
echo "<br> <hr>";

// verifica se uma variavel existe 
$fruta = 'melancia';

if (isset($fruta)){
    echo $fruta;
} else {
    echo 'essa variavel não existe';
}
echo "<br>";

// deleta uma variavel
unset($fruta);

if (isset($fruta)){
    echo $fruta;
} else {
    echo 'essa variavel não existe';
}
echo "<br> <hr>";

// retorna datas
echo 'Ano:' .  date('Y') . '<br>';
echo 'Mês:' .  date('M') . '<br>';
echo 'Dia:' .  date('d') . '<br>';
echo date('d/m/Y');
echo "<br> <hr>";

//retorna as horas
echo 'Hora: ' . date('h') . '<br>';
echo 'Minutos: ' . date('i') . '<br>';
echo 'Segundos: ' . date('s') . '<br>';
echo date('H:i:s') . '<br> <hr>';

// analisar o ambiente
//phpinfo();

// CRIPTOGRAFIAS
$salt = 'Adsjmv#12df4a2fsdJ$S15as';
$password = '123456' . $salt;

echo sha1($password);
echo "<br>";
echo crypt($password, $salt);
echo "<br>";

$passCR = base64_encode($password);
echo $passCR;
echo "<br>";
echo base64_decode($passCR);
echo "<br>";

echo hash('sha512' , $password);
echo "<br>";

function cryptC(string $value): string {
    $hash = crypt($value , 'Adsjmv#12df4a2fsdJ$S15as');
    $hash = md5($value);
    $hash = sha1($value);
    $hash = hash('sha512', $hash);

    return $hash;
};
echo "<br> <hr>";

//OPERADORES DE ATRIBUIÇÃO

//atribui valor
$a = 2; 
echo "$a <br>";

// somar o valor da variavel com o informado no codigo
$a += 2;
echo "$a <br>";

//subtrai o valor da variavel com o valor informado
$a -= 2;
echo "$a <br>";

//multiplica o valor da variavel com o valor informado
$a *= 2;
echo "$a <br>";

//divide o valor da variavel com o valor informado
$a /= 2;
echo "$a <br> <hr>";

// retorna o valor da variavel e incrementa mais um 
$b = 2;
$b++;
echo "$b <br>";

// retorna o valor da variavel e diminui mais um 
$b = 2;
$b--;
echo "$b <br>";
