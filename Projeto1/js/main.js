//JavaScript puro

/* let botao = document.querySelector('.menu-principal__btn');
let menuPrincipal = document.querySelector('.menu-principal');

botao.addEventListener('click', abreFechaMenu);

function abreFechaMenu(evento){
    menuPrincipal.classList.toggle('menu-principal--fechado');
} */

//jquery

$(document).ready(function(){
    //Botão do menu
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });
    // slides Depoimentos
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });
    // validação do comentario
    $('.formulario').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            nome: "required",
            mensagem: "required"
        },
        messages: {
            email: {
                required: "*Este campo é obrigatório",
                email: "*Não consegue, né moisés!"
            },
            nome: "*Este campo é obrigatório",
            mensagem: "*Este campo é obrigatório"
        }
    });
});
