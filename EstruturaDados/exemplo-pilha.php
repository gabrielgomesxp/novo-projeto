<?php
// A Estrutura de Pilha é basicamente a lógica do ctrl+z e ctrl+y no Windows. 
// Você retorna ao elemento anterior ou adiciona um novo elemento. Sempre um após o outro.
// Como em uma pilha de livros, para chegar ao penultimo livro do topo é necessário remover o ultimo do topo.


require 'SplStack.php'; // Inclui a classe SplStack

$pilhaSpl = new SplStack();

$pilhaSpl->push("valor1");
$pilhaSpl->push("valor2");
$pilhaSpl->push("valor3");

echo $pilhaSpl->top(); // Exibe: valor3

$valorRemovido = $pilhaSpl->pop();
echo $valorRemovido; // Exibe: valor3

echo $pilhaSpl->isEmpty(); // Exibe: false

?>