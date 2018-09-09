<?php

/**
 *  Método que valida os campos de acordo com seus tipo
 * impedindo qualquer tipo de script injection.
 * 
 *  Como ele está em um require, ele tem acesso ao método
 * de requisição da página onde ele é chamado, 
 * que agora está dentro de request.
 * 
 * @param array tipos['s' => string, 'e' => email, 'i' => int]
 */
function validate(array $fields) {
    $request = request();
    $validate = [];

    foreach($fields as $field => $type) {
        switch($type) {
            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    //Transforma o conteúdo do array POST ou GET em um objeto.
    return (object) $validate;
}

/**
 *  Método criado com o objetivo de verificar
 * se existe algum campo no formulário que é
 * vazio.
 * 
 */
function isEmpty() {

    $request = request();
    $empty = false;

    foreach($request as $key => $value) {
        if(empty($request[$key])) {
            return $empty = true;
        }
    }

    return $empty;
}