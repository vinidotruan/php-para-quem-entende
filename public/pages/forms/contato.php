<?php

require "../../../bootstrap.php";

if(isEmpty()) {
    flash('message', 'Preencha todos os campos');
    header("location:/?page=contato");
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

dd($validate->name);