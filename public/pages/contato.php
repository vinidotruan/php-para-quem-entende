<h2>Contato</h2>

<form action="/pages/forms/contato.php" method="POST" role="form">

    <div class="form-group">
        <label for="name"> Nome: </label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="email"> Email: </label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="subject"> Assunto: </label>
        <input type="text" class="form-control" name="subject" placeholder="Digite o assunto do email">
    </div>

    <div class="form-group">
        <label for="messagem"> Mensagem: </label>
        <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Enviar</button>
</form>