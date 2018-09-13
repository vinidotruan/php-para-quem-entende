<?php

require "../../../bootstrap.php";

if(isEmpty()) {
    flash('message', 'Preencha todos os campos');
    return redirect('contato');
}


/**
 *  Faz a validação dos dados de acordo
 * com o tipo do dado para que não haja
 * injeção de script ou whatever.
 * 
 */
$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

$data = [
    'quem' => $validate->email,
    'para' => 'contatoruanvinicius@gmail.com',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject
]; 

dd(send($data));

if(send($data)) {
    flash('messagem', 'Email enviado com sucesso', 'success');
    return redirect('contato');
}