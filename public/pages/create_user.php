<form action="/pages/forms/create_user.php" method="POST">
    <legend>Cadastro de usuário</legend>

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" placeholder="Digite seu nome">
    </div>

    <button type="submit">Enviar</button>

</form>