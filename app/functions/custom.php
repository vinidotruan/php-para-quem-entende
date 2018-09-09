<?php

/**
 * Famoso método dd();
 * 
 */
function dd($dump) {
    var_dump($dump);
    die();
}


/**
 *  Feito para que independente do método seja
 * possível trabalhar com uma mesma variável.
 * 
 */
function request() {

    $request = $_SERVER['REQUEST_METHOD'];

    if($request == "POST") {
        return $_POST;
    }

    return $_GET;
}