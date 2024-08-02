<?php
class App
{
    protected $controller = 'Home'; // Controlador padrão
    protected $method = 'index'; // Método padrão
    protected $params = []; // Parâmetros

    public function __construct()
    {
        $url = $this->parseUrl();

        // Verifica se o controlador existe
        if ($url && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Verifica se o método existe no controlador
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Pega os parâmetros
        $this->params = $url ? array_values($url) : [];

        // Chama o controlador/método com os parâmetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Método para analisar a URL e retornar um array
    protected function parseUrl()
    {
        if (isset($_GET['route'])) {
            $url = $_GET['route'];
            return explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
        }
    }
}