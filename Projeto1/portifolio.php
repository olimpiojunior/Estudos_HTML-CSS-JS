<?php
    global $titulopagina;
    $titulopagina = "Portifolio";
    include('partes/cabecalho.php');
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portifólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Texto centralizado que ainda vou inventar ou copiar depois pra colar aqui, como eu percebi que o texto é grande e tem<br>
                várias quebras de linha, estou escrevendo coisas sem sentido aqui só pra ficar maior e eu poder coloar as quebras de linhas.<br>
                Bom lembrar que dar enter no texto aqui no html não faz com que ele de quebra de linha no brouser, é preciso inserir o br
                para aparecer a quebra de linha no site.
            </p>
            <nav>
                <ul class="lista-trabalho">
                    <li class="lista-trabalho__item"><!--Sempre coloque o alt para explicar a imgagem-->
                        <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalho__imagem" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="Um avião vermelho">
                            <h2 class="lista-trabalho__titulo">Aqui está um avião vermelho</h2></a>
                    </li>
                    <li class="lista-trabalho__item">
                        <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalho__imagem" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="Uma catraca de bike">
                            <h2 class="lista-trabalho__titulo">Aqui está uma catraca de bike</h2></a>
                    </li>
                    <li class="lista-trabalho__item">
                        <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalho__imagem" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="Uma rua iluminada de hong-kong">
                            <h2 class="lista-trabalho__titulo">Aqui está uma rua iluminada de hong-kong</h2></a>
                    </li>
                    <li class="lista-trabalho__item">
                        <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalho__imagem" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="O monte landscape">
                            <h2 class="lista-trabalho__titulo">Aqui está o monte landscape</h2></a>
                    </li>
                    <li class="lista-trabalho__item">
                        <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalho__imagem" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="O banco de uma bike">
                            <h2 class="lista-trabalho__titulo">Aqui está o banco de uma bike</h2></a>
                    </li>
                    <li class="lista-trabalho__item">
                        <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalho__imagem" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="Uma cidade colorida">
                            <h2 class="lista-trabalho__titulo">Aqui está uma cidade colorida</h2></a>
                    </li>
                </ul>
            </nav>
        </section>
<?php include('partes/rodape.php'); ?>