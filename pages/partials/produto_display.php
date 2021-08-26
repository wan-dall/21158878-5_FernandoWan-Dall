<div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
    <?php
    foreach ($produtos as $id => $item) {
        ?>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow">
                <div class="card-body">
                    <div class="pb-2">
                        <img src="images/produtos/<?php echo $item['img']; ?>" class="img-fluid" alt="IMG" />
                    </div>
                    <h3><?php echo $item['nome']; ?></h3>
                    <h4 class="card-title">
                        R$ <?php echo formatPrice($item['preco']); ?>
                        <small class="text-muted fw-light">/un</small>
                    </h4>
                    <ul class="list-unstyled mt-2 mb-3">
                        <li>
                            <?php
                            $prodCats = [];
                            foreach ($item['categorias'] as $prodCat) {
                                $prodCats[] = $categorias[$prodCat]['nome'];
                            }
                            echo implode(', ', $prodCats);
                            ?>
                        </li>
                    </ul>
                    <a href="?p=produto&id=<?php echo $id; ?>" class="w-100 btn btn-lg btn-outline-primary">
                        Visualizar
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
