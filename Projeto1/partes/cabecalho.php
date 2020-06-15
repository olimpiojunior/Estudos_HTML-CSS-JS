<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $titulo = "Programador Olímpico";
        global $titulopagina;
        if($titulopagina != ''){
            $titulo .= ' | ' . $titulopagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <?php if($titulopagina == ''): ?>
                <h1 class="logo">Página Inicial</h1>
            <?php else: ?>
                <a href="index.php" class="logo">Página Inicial</a>
            <?php endif; ?>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/Fechar Menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $titulopagina == '' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $titulopagina == 'Sobre' ? 'menu-principal__item--atual' : '' ?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-principal__item <?php echo $titulopagina == 'Portifolio' ? 'menu-principal__item--atual' : '' ?>" href="portifolio.php">Portifólio</a></li>
                    <li><a class="menu-principal__item <?php echo $titulopagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div><!--Fim container-->
    </header>
    <main><!--Neste caso usamos um href diferente, onde iremos gerar um link para a mesma pagina-->