<?php

$produtos = [];

for ($n = 1; $n <= 10; $n++) {
    $produtos[$n] = [
        'nome' => "produto {$n}",
        'preco' => $n + 12.2,
        'descricao' => "Descrição do produto {$n}",
    ];
}
