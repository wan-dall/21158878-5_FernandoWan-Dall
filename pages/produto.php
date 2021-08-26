<?php
require __DIR__ . '/../dados/produtos.php';
require __DIR__ . '/../dados/categorias.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isset($produtos[$id])) {
    $produto = $produtos[$id];
    $categoria = $produto['categorias'][0];
}
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?p=">Home</a></li>
        <li class="breadcrumb-item"><a href="?p=produtos">Produtos</a></li>
        <?php
        echo "<li class=\"breadcrumb-item active\">" . ucfirst($produto['nome']) . "</li>";
        ?>
    </ol>
</nav>
<?php

if (! isset($produtos[$id])) {

    echo "<h1>Produto {$id} não encontrado</h1>";

} else {
    ?>

    <div class="row mt-4">
        <div class="col-lg-4 pb-3">
            <img src="images/produtos/<?php echo $produto['img']; ?>" class="img-fluid" alt="IMG" />
        </div>

        <div class="col-lg-6 text-center">
            <h2>Produto <?php echo $produto['nome']; ?></h2>
            <hr class="col-1 mx-auto" />
            <div>
                R$
                <span class="fw-bold fs-3 mt-5"><?php echo formatPrice($produto['preco']); ?></span>
            </div>
            <div class="border-bottom m-4"></div>
            <p><?php echo $produto['descricao']; ?></p>
        </div>

        <div class="col-md ms-2 border-start">
            <div>
                <h5 class="fw-bold">Outros produtos relacionados</h5>
                <hr class="col-1 mx-auto" />
                <?php
                $produtos = getProdutosCategoria($categoria, $produtos);
                $produtos = array_slice($produtos, 0, 5, true);

                $i = 0;
                foreach ($produtos as $idRelacionado => $produto) {
                    // ignora o produto atual
                    if ($idRelacionado == $id) {
                        continue;
                    }
                    if ($i > 0) {
                        echo "<div class=\"border-bottom my-2\"></div>";
                    }
                    $i++;
                    ?>
                    <div class="row gx-2 position-relative">
                        <div class="col-5">
                            <img src="images/produtos/<?php echo $produto['img']; ?>" class="img-fluid" alt="IMG" />
                        </div>
                        <div class="col">
                            <?php echo $produto['nome']; ?>
                            <p class="fw-bold">R$ <?php echo formatPrice($produto['preco']); ?></p>
                        </div>
                        <a href="?p=produto&id=<?php echo $idRelacionado; ?>" class="border stretched-link"></a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="mt-4">
                <h5 class="fw-bold text-muted">Categorias de produtos</h5>
                <hr class="col-1 mx-auto" />
                <?php
                $i = 0;
                foreach ($categorias as $id => $categoria) {
                    if ($i > 0) {
                        echo "<div class=\"border-bottom my-2\"></div>";
                    }
                    $i++;
                    ?>
                    <a href="?p=produtos&categoria=<?php echo $id; ?>" class="text-capitalize text-decoration-none d-block">
                        <?php echo $categoria['nome']; ?>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
