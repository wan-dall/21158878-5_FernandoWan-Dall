<?php
require __DIR__ . '/../dados/produtos.php';

$produtos = array_slice($produtos, 0, 4, true);
?>
<div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
    <?php
    foreach ($produtos as $id => $item) {
        ?>
        <div class="col">
            <div class="card mb-2 rounded-3 shadow-sm">
                <div class="card-body">
                    <div class="py-5">
                        IMG
                    </div>
                    <h2 class="card-title pricing-card-title">
                        R$ <?php echo $item['preco']; ?>
                        <small class="text-muted fw-light">/un</small>
                    </h2>
                    <ul class="list-unstyled mt-3 mb-3">
                        <li><?php echo $item['descricao']; ?></li>
                        <li>detalhes</li>
                    </ul>
                    <a href="produto/?id=<?php echo $id; ?>" class="w-100 btn btn-lg btn-outline-primary">
                        Visualizar
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
