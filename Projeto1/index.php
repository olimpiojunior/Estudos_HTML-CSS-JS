<?php include('partes/cabecalho.php'); ?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">TEXTO GRANDE VEM AQUI</h2>
            <p class="cabecalho-home__subtitulo">Texto menorzinho aqui</p>
            <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
        </header><!--Dentro de section esta o id para a referencia #serviços-->
        <section class="servicos" id="servicos"><!--Início da seção serviços-->
            <div class="container">
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servicos__item">
                    <img src="img/icone-desenvolvimento-web.png" alt="icone desenvolvimento web">
                    <h3>Desenvolvimento Web</h3>
                    <p class="servicos__texto">Aqui vem um texto que fica em baixo do titulo desenvolvimento Web e que explica alguma coisa.</p>
                </section>
                <section class="servicos__item">
                    <img src="img/icone-carrinho-compras.png" alt="icone e-comerce">
                    <h3>E-Comerce</h3>
                    <p class="servicos__texto">Aqui vem um textinho sobre e-comerce explicando sobre o assunto e eu também preciso aprender o que é</p>
                </section>
                <section class="servicos__item">
                    <img src="img/icone-cafe.png" alt="icone cafe">
                    <h3>Café</h3>
                    <p class="servicos__texto">Aqui vem a parte mais intrigante, o que será que tem a ver um subtitulo chamado café?</p>
                </section>
            </div><!--Fim container-->
        </section><!--Fim da serção serviços-->
        <section class="depoimentos"><!--Início seção depoimentos-->
            <div class="container">
                <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
                <div class="depoimentos__caixa">
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="foto de pessoa alternativa">
                        <p class="depoimentos__texto" >Paragrafo qualquer de depoimento de pessoas que escreve texto na internet. Em tempo de quarentena surgem<br>
                        muitos filósofos de internet querendo ser Platão</p>
                        <p class="depoimentos__pessoa">Olímpio - Engenheiro de Software</p>
                    </section>
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="foto de pessoa alternativa">
                        <p class="depoimentos__texto" >Paragrafo qualquer de depoimento de pessoas que escreve texto na internet. Em tempo de quarentena surgem<br>
                        muitos filósofos de internet querendo ser Platão</p>
                        <p class="depoimentos__pessoa">Olímpio - Engenheiro de Software</p>
                    </section>
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="foto de pessoa alternativa">
                        <p class="depoimentos__texto" >Paragrafo qualquer de depoimento de pessoas que escreve texto na internet. Em tempo de quarentena surgem<br>
                        muitos filósofos de internet querendo ser Platão</p>
                        <p class="depoimentos__pessoa">Olímpio - Engenheiro de Software</p>
                    </section>
                </div><!--Depoimentos caixa-->
            </div>
        </section><!--Fim seção depoimentos-->
        </header>
<?php include('partes/rodape.php'); ?>
