<?php
require __DIR__ . '/../dados/produtos.php';
require __DIR__ . '/../dados/categorias.php';

$categoria = filter_input(INPUT_GET, 'categoria', FILTER_VALIDATE_INT);
if ($categoria !== null) {
    $produtos = getProdutosCategoria($categoria, $produtos);
}

if (count($produtos)) {
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=home">Home</a></li>
            <?php
            if ($categoria !== null) {
                echo "<li class=\"breadcrumb-item\"><a href=\"?p=produtos\">Produtos</a></li>";
                echo "<li class=\"breadcrumb-item active\">Categoria '" . ucfirst($categorias[$categoria]['nome']) . "'</li>";
            } else {
                echo "<li class=\"breadcrumb-item active\">Produtos</li>";
            }
            ?>
        </ol>
    </nav>
    <?php
    require __DIR__ . '/partials/produto_display.php';
} else {
    echo "<h1>Nenhum produto encontrado</h1>";
}
