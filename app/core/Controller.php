<?php
// Arquivo Controller.php
class Controller
{
    public function view($view, $data = [])
    {
        // Extrai os dados para variáveis
        extract($data);

        // Construa o caminho completo para o arquivo da visão
        $viewPath = "app/views/{$view}.php";
        
        // Verifica se o arquivo da visão existe antes de incluí-lo
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            // Você pode querer tratar o erro de arquivo não encontrado de uma forma específica
            die("Arquivo de visão não encontrado: " . $viewPath);
        }
    }
}
