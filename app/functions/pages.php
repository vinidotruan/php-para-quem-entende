<?php

    /**
     *  Função para carregar a página correspondente a url
     * caso ela não exista, é feito o retorno para a index.
     * 
     */
    function load() {
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

        $page = (!$page)? 'pages/home.php' : "pages/{$page}.php";

        if(!file_exists($page)) {
            throw new \Exception('Opa alguma coisa errada');
        }

        return $page;
        
    }