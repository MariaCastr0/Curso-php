// Regras para nomes identificadores no PHP

/*
1- Variáveis sempre começam com o símbolo $;
2- O segundo caractere após o $ poder ser letra ou o símbolo: _;
3- Aceita caracteres [a-z], [A-Z], [0-9] e [_];
4- Aceita caracteres da tabela ASCII a partir de 128, (caracteres acentuados nas Variáveis);
5- Aceita caracteres acentuados como: á, õ, ç;
6- A linguagem é case sensite em relação aos nomes, colocar "";
7- Nomes especiais como $this não podem ser usados.
*/

<?php 
    $nomeCompletoCliente = "Camel Case";
    $telefone_contato_fornecedor = "Snake Case";
    $nomecursosuperior = ""; //misturado e sem distinção
?>

// Tipos Primitivos Escalares

/*

$sobrenome = "Silva"; // Tipo: String = sequência de letras, números e símbolos, sempe representadas entre aspas.

$idade = 34; // Tipo: int ou integer = um valor numérico Inteiro, aquele que vem sem a parte decimal.

$peso = 85.9; // float, double ou real (obd: deixou de ser utilizado a partir da versão 7 do PHP) = 

*/