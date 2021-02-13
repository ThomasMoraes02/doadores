<section class="container">
    <?php if(isset($_SESSION['mensagem'])): ?>
    <div class="alert alert-<?= $_SESSION['tipo_mensagem'] ?>">
        <?= $_SESSION['mensagem'] ?>
    </div>
    <?php endif; ?>
</section>

<section class="container admin">
    <dl class="js-accordion">
        <dt>Cadastrar um novo doador</dt>
        <dd>Para cadastrar um novo doador basta acessar o seguinte link : <a href="cadastra">Cadastrar novo doador</a>
        </dd>
        <dt>Listar doadores cadastrados</dt>
        <dd>Para listar doadores cadastrados acesse o seguinte link : <a href="#listar">Listar Doadores</a></dd>
    </dl>
</section>

<section class="lista-doadores" id="listar">
    <div class="container">
        <form action="buscar" method="post">
            <div class="row d-flex align-itens-center mb-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="busca_doador" id="busca_doador"
                        placeholder="Buscar por nome...">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                </div>
            </div>
        </form>
        <table class="table table-striped table-bordered table-hover table-sm table-responsive">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Doação:</th>
                </tr>
            </thead>
            <tbody>
                <?php if($doadores): ?>
                <?php foreach($doadores as $doador): ?>
                <tr>
                    <th scope="row"><?= $doador['nome'] ?></th>
                    <td><?= $doador['cpf'] ?></td>
                    <td><?= $doador['telefone'] ?></td>
                    <td><?= $doador['dt_nasc'] ?></td>
                    <td><?= $doador['logradouro'] ?></td>
                    <td><?= date("d/m/Y", strtotime($doador['create'])) ?></td>
                    <td><?= "R$" . $doador['valor'] ?></td>
                    <td><a class="btn btn-success btn-sm" href="edita/<?php echo $doador['id'] ?>">Editar</a></td>
                    <td><a class="btn btn-danger btn-sm" href="excluir/<?php echo $doador['id'] ?>">Excluir</a></td>
                </tr>
                <?php endforeach ?>
                <?php else: ?>
                <tr>
                    <td>Nenhum doador Cadastrado</td>
                </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</section>

<?php unset($_SESSION['tipo_mensagem']); ?>
<?php unset($_SESSION['mensagem']); ?>