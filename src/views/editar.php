<?php if($doador): extract($doador[0]); ?>
<section class="formulario">
    <div class="container">
        <form action="edita/atualizar" method="POST">
            <p class="subtitulo">Dados Gerais</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $cpf ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $telefone ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="dt_nasc">Data de Nascimento</label>
                    <input type="text" class="form-control" id="dt_nasc" name="dt_nasc" value="<?= $dt_nasc = date("d/m/Y", strtotime($dt_nasc)) ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="intervalo">Intervalo de Doação</label>
                    <select id="intervalo" name="intervalo" class="form-control">
                        <option value="unico" <?= $intervalo =='unico'?'selected':'';?>>Único</option>
                        <option value="bimestral" <?= $intervalo =='bimestral'?'selected':'';?>>Bimestral</option>
                        <option value="semestral" <?= $intervalo =='semestral'?'selected':'';?>>Semestral</option>
                        <option value="anual" <?= $intervalo =='anual'?'selected':'';?>>Anual</option>
                    </select>
                </div>
            </div>
            <hr>
            <p class="subtitulo">Dados de Endereço</p>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="<?= $cep ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro"
                        value="<?= $logradouro ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $bairro ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $cidade ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control" id="uf" name="uf" value="<?= $uf ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="num">Número</label>
                    <input type="text" class="form-control" id="num" name="num" value="<?= $num ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="<?= $complemento ?>">
                </div>
            </div>
            <hr>
            <p class="subtitulo">Dados de Pagamento</p>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="valor">Valor da Doação</label>
                    <input type="text" class="form-control" id="valor" name="valor" value="<?= $valor ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="pagamento">Forma de Pagamento</label>
                    <select id="pagamento" class="form-control" name="pagamento">
                        <option value="debito" <?= $pagamento =='debito'?'selected':'';?>>Débito</option>
                        <option value="credito" <?= $pagamento =='credito'?'selected':''; ?>>Crédito</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type="submit" class="btn btn-primary">Atualizar Doador</button>
            <a href="/doadores/" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</section>
<?php else: ?>
<p>Doador não encontrado</p>
<?php endif; ?>

<style>
.navegacao {
    background-color: #fff;
    margin: 0;
    padding-top: 10px;
}

.navegacao p a {
    color: #005a92;
    font-weight: bold;
    font-size: 1.8rem;
}

.topo {
    margin-bottom: 40px;
    background-color: #005a92;
    padding: 15px 0;
}

.titulo {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 4em;
    color: #fff;
    letter-spacing: .3rem;
    text-transform: uppercase;
}

.footer {
    bottom: 0;
    background-color: red;
    padding: 0;
    margin-top: 20px;
}

.footer p {
    padding: 10px 0;
    text-align: center;
    color: #fff;
}

.formulario {
    margin-bottom: 50px;
}

.formulario label {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 18px;
}


/* Home - Tela de Cadastro */

.fundo-cadastro {
    background: rgb(81, 165, 233);
    padding: 20px;
}

.fundo-cadastro h2 {
    letter-spacing: 0.1rem;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    padding-bottom: 10px;
}

.fundo-cadastro label {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding-top: 5px;
}

.subtitulo {
    text-align: center;
    font-weight: bolder;
    font-size: 1.5rem;
}
</style>