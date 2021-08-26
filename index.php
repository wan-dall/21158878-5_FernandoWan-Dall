<?php

require __DIR__ . '/function/functions.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
    case 'home':
        $page = 'home.php';
        break;
    case 'contato':
        $page = 'contato.php';
        break;
    case 'produto':
        $page = 'produto.php';
        break;
    case 'produtos':
        $page = 'produtos.php';
        break;
    case 'quem-somos':
        $page = 'quemsomos.php';
        break;
    default:
        $page = '/errors/404.php';
}
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Fulano Doces</title>
</head>
<body>
<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="32" viewBox="0 0 40 32">
                    <title>Fulano Doces</title>
                    <g transform="matrix(1 0 0 1 20 15)" style="" id="90191ff3-22b7-40b6-b4d8-c88d3a949d12">
                        <rect fill="#000000" x="-18" y="-16" width="42" height="34"></rect>
                        <text font-family="Arial" font-size="27" font-style="normal" font-weight="700" text-decoration="underline" style="fill: rgb(255,255,255); opacity: 1; white-space: pre;">
                            <tspan x="-14.52" y="9.42" >F</tspan>
                            <tspan x="1.3" y="9.42" >D</tspan>
                        </text>
                    </g>
                </svg>
                <span class="fs-4">Fulano Doces</span>
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="/">Home</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="quem-somos">Quem Somos</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="contato">Contato</a>
            </nav>
        </div>
    </header>
    <main>
        <?php
        require __DIR__ . "/pages/{$page}";
        ?>
    </main>
    <footer class="footer mt-4 pt-4 pt-md-4 border-top">
        <div class="row">
            <div class="col-12 col-md text-center">
                <small class="d-block mb-3 text-muted">
                    &copy; 2021 - Desenvolvido por Fernando Wan-Dall - RA 21158878-5
                </small>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
