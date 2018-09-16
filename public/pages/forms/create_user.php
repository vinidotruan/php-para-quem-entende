<?php

require "../../../bootstrap.php";

if(isEmpty()) {
    flash('message', 'Preencha todos os campos');
    return redirect('contato');
}

$validate = validate([
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'senha' => 's',
]);

$cadastrado = create('users', $validate);

if($cadastrado) {
    flash('message', 'cadastrado com sucesso', 'success');
    return redirect('create_user');
}

flash('message', 'Erro ao cadastrar');
redirect('create_user');