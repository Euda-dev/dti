<?php
// Caminho do arquivo para teste
$viewPath = 'app/views/home/index.php';

// Verifica se o arquivo existe
if (file_exists($viewPath)) {
    echo "O arquivo existe: " . $viewPath;
    require_once $viewPath;
} else {
    echo "Arquivo não encontrado: " . $viewPath;
}
