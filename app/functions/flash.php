<?php 

/**
 *  Função que cria a mensagem caso ela não exista.
 */
function flash($key, $message, $type = 'danger') {
    if(!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<span class='alert alert-{$type}'>".$message.$type.'</span>';
    }
}


/**
 *  Função que retorna a mensagem caso ela exista
 * e destrói a mesma.
 * 
 */
function get($key) {
    if(isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }

}