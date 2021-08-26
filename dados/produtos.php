<?php

$produtos = [];

for ($n = 1; $n <= 10; $n++) {
    $produtos[$n] = [
        'nome' => "produto {$n}",
        'img' => "{$n}.jpg",
        'destaque' => (bool) mt_rand(0, 1),
        'preco' => $n * .99,
        'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus tellus nisi. Suspendisse eget lacus tellus. Quisque gravida dictum lorem in tincidunt. Vivamus nibh quam, maximus eget fermentum et, imperdiet sed velit.",
        'categorias' => [mt_rand(2, 5), 1],
    ];
}
