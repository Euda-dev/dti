<?php

class Controller
{
    public function view($view, $data = [])
    {
        // Extrai os dados para variáveis
        extract($data);

        // Construa o caminho completo para o arquivo da view
        $viewPath = "app/views/{$view}.php";
        
        // Verifica se o arquivo da view existe antes de incluí-lo
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
        
            die("Arquivo de visão não encontrado: " . $viewPath);
        }
    }
}
