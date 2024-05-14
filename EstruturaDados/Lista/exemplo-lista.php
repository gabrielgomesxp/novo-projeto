
<?php
// Em Lista é possível adicionar elementos ao código ou remove-los! Dependendo do que exatamente você fará
// criar uma estrutura de dados em Lista pode ser a forma mais viável. Por exemplo: Se você pretende adicionar
// ou remover elementos deste código e a ordem deles não for critica, utulizar-se de Lista é muito viável.
// Porém se a ordem for crucial e o acesso rápido dos elementos for importante, melhor o Vetor.

// Neste exemplo o código está adicionando no topo da Lista de frutas a fruta "Uva".
// Certamente é possível adicionar depois de "Maça", mas isto vou descobrir jaja!

require 'SplDoublyLinkedList.php'; // Inclui a classe SplDoublyLinkedList

$listaLigada = new SplDoublyLinkedList();

$listaLigada->push("maçã");
$listaLigada->push("banana");
$listaLigada->push("laranja");

echo $listaLigada->top(); // Exibe: laranja (primeiro elemento)

$listaLigada->unshift("uva"); // Adiciona "uva" no início da lista

foreach ($listaLigada as $fruta) {
  echo "$fruta \n";
}

?>
