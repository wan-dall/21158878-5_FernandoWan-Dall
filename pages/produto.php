<?php
require __DIR__ . '/../dados/produtos.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (! isset($produtos[$id])) {

    echo "<h1>Produto {$id} não encontrado</h1>";

} else {
    ?>

    <h1>Produto <?php echo "{$produtos[$id]['nome']} - {$produtos[$id]['descricao']}"; ?></h1>

    <?php
}
