<?php
require __DIR__ . '/../dados/produtos.php';
require __DIR__ . '/../dados/categorias.php';

// Filtra os destaques para home
$destaques = array_filter($produtos, static function ($v) {
    return $v['destaque'] === true;
});
shuffle_assoc($destaques);
// Apenas 4 destaques podem ser exibidos na home
$produtos = array_slice($destaques, 0, 4, true);
?>
<div class="row row-cols-1 mb-3">
    <div class="col">
        <h4>Produtos em destaque</h4>
    </div>
</div>
<?php
require __DIR__ . '/partials/produto_display.php';
?>
<div class="row row-cols-1 mb-3">
    <div class="col">
        <h5>Categorias</h5>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-6 mb-3">
    <?php
    foreach ($categorias as $id => $categoria) {
        ?>
        <div class="col">
            <div class="card mb-2 rounded-3 shadow">
                <div class="card-body">
                    <div class="pb-3">
                        <img src="images/categorias/<?php echo $categoria['img']; ?>" class="img-fluid" alt="IMG" />
                    </div>
                    <a href="?p=produtos&categoria=<?php echo $id; ?>" class="w-100 btn btn btn-outline-primary">
                        <?php echo $categoria['nome']; ?>
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
