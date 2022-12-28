<?php
spl_autoload_register(function (string $className){
    $caminhoArquivo = str_replace('Apidog\\', '', $className);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
 
    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});