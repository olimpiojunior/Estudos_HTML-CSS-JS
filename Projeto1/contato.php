<?php
    global $titulopagina;
    $titulopagina = "Contato";
    include('partes/cabecalho.php');

    $nome = '';
    $email = '';
    $mensagem = '';
    $erroformulario = '';
    $sucessoformulario = '';
    if( isset($_POST['submit']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if($nome != '' && $email != '' && $mensagem != ''){
            // usuario preencheu corretamente
            $mensagememail = 'Nome: ' . $nome . ' - ';
            $mensagememail .= 'Email: ' . $email . ' - ';
            $mensagememail .= 'Mensagem: ' . $mensagem;
            if( mail('olimpio2606@gmail.com', 'Mensagem do site', $mensagememail)){
                // email enviado
                $sucessoformulario = "Mensagem enviada com sucesso";
            }
            else{
                // email não enviadox
                $erroformulario = 'Falha ao enviar a mensagem. Tente novamente';
            }
        }
        else{
            // não preenche todos os campos
            $erroformulario = 'Verifique o preenchimento dos campos';
        }
    }
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center">
                Aqui tem um texto centralizado que informa alguma coisa antes da caixa de inscrição.<br>
                É importante deixar paragrafos organizados com identação. Pois deixa o código melhor.
            </p>
            <form action="contato.php" class="formulario" method="post">

                <?php if($erroformulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroformulario ?>
                    </div>
                <?php endif; ?>

                <?php if($sucessoformulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoformulario ?>
                    </div>
                <?php endif; ?>

                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="nome">Nome:</label><br>
                    <input class="formulario__campo" id="nome" type="text" name="nome"><br>
                </div>
                <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario__label" for="email">Email:</label><br>
                    <input class="formulario__campo" id="email" type="email" name="email"><br>
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="msg">Mensagem:</label><br>
                    <textarea class="formulario__campo" id="msg" name="mensagem" cols="30" rows="5"></textarea>
                </div>
                <div class="formulario__grupo">
                    <input class="formulario__botao" type="submit" value="Enviar" name="submit">
                </div>
            </form>
            <p class="text-center">
                Aqui vem mais um textinho centralizado após o botão enviar<br>
                Interessante ressaltar que está em duas linhas. É importante deixar organizado.
            </p>
        </section>
        <div class="mapa"><!--Aqui é feita a coisa mais top do site até agora. Foi criado um link para o google maps onde é possível navegar pelo mapa como se estivesse no google maps. Para isso, basta entrar no google maps, escolher o lugar no mapa, clicar nas 3 barrinhas, clicar em share or embed map, clicar na tab embed map e copiar o link html. Simplismente incrível-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15098.505015874558!2d-48.263167086462396!3d-18.903654686010128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbr!4v1590543912919!5m2!1sen!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
<?php include('partes/rodape.php'); ?>