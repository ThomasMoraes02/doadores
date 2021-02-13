//Carregar endereço através de viaCep
function viaCep() {
    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#logradouro").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#ibge").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#logradouro").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#logradouro").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#ibge").val(dados.ibge);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
}
viaCep();

//Valida CPF
$('#cpf').mask('000.000.000-00');

//Valida Telefone
$('#telefone').mask('(99) 99999-9999');

//Valida Data de Nascimento
$('#dt_nasc').mask('##/##/####');

//Valida Pagamento
$('#valor').mask('#.##0,00', { reverse: true });


//Accordion list para lista administrativa

const accordionList = document.querySelectorAll(".js-accordion dt");

function activeAccordion() {
    this.classList.toggle('ativo');
    this.nextElementSibling.classList.toggle('ativo');
}

accordionList.forEach((item) => {
    item.addEventListener('click', activeAccordion);
})

// Efeito Transparencia

function transparenciaEfeito() {
    const linkListar = document.querySelector('a[href^="#listar"]');

    const sectionLink = document.querySelector(".lista-doadores");

    function handleListaAtiva() {
        sectionLink.classList.toggle('ativo');
    }

    linkListar.addEventListener('click', handleListaAtiva);
}
transparenciaEfeito();