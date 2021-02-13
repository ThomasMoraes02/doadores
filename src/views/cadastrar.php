<section class="formulario">
    <div class="container">
        <form action="cadastrar" method="POST">
            <div class="js-grupo">
                <p class="subtitulo">Dados Gerais</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="dt_nasc">Data de Nascimento</label>
                        <input type="text" class="form-control" id="dt_nasc" name="dt_nasc" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="intervalo">Intervalo de Doação</label>
                        <select id="intervalo" name="intervalo" class="form-control" required>
                            <option value="unico">Único</option>
                            <option value="bimestral">Bimestral</option>
                            <option value="semetral">Semestral</option>
                            <option value="anual">Anual</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="js-grupo">
                <p class="subtitulo">Dados de Endereço</p>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" value="" class="form-control" id="cep" name="cep" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf" name="uf" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="num">Número</label>
                        <input type="text" class="form-control" id="num" name="num" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
                </div>
            </div>
            <hr>
            <div class="js-grupo">
                <p class="subtitulo">Dados de Pagamento</p>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="valor">Valor da Doação</label>
                        <input type="text" class="form-control" id="valor" name="valor" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pagamento">Forma de Pagamento</label>
                        <select id="pagamento" class="form-control" name="pagamento" required>
                            <option value="debito">Débito</option>
                            <option value="credito">Crédito</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Doador</button>
            <a href="/doadores/" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</section>