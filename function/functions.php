<?php

/**
 * Formata um float para ser exido em BRL
 * @param float $price
 * @return string
 */
function formatPrice($price)
{
    return number_format($price, 2, ',', '.');
}

/**
 * Retorna um array com os produtos da categoria informada
 * @param string $categoria
 * @param array $produtos
 * @return array
 */
function getProdutosCategoria($categoria, array $produtos)
{
    return  array_filter($produtos, static function ($v) use ($categoria) {
        return in_array($categoria, $v['categorias'], true);
    });
}

/**
 * Embaralha um array mantendo seus índices
 * @param $array
 */
function shuffle_assoc(&$array)
{
    $keys = array_keys($array);
    shuffle($keys);

    $shuffled = [];
    foreach ($keys as $key) {
        $shuffled[$key] = $array[$key];
    }

    $array = $shuffled;
}
