<?php
require __DIR__ . '/../dados/produtos.php';
require __DIR__ . '/../dados/categorias.php';

$categoria = filter_input(INPUT_GET, 'categoria', FILTER_VALIDATE_INT);
if ($categoria !== null) {
    $produtos = getProdutosCategoria($categoria, $produtos);
}
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
$qtdProdutos = count($produtos);
if ($qtdProdutos) {
    require __DIR__ . '/partials/produto_display.php';

    // TODO: Adicionar paginação?
    ?>
    <nav aria-label="Navegação de produtos">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
        <div class=\"text-muted\">1 de <?php echo $qtdProdutos; ?> produtos encontrados</div>
    </nav>
    <?php
} else {
    echo "<h1>Nenhum produto encontrado</h1>";
}
