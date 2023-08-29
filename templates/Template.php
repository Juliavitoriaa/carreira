<?php 
class Template {
    /**Carregaro cabeçalho das páginas */
    function header(){
        require __DIR__ . "/header.php";
    }

    /**Carrega o rodapé dee todas as páginas */
    function footer(){
        require __DIR__ . "/footer.php";
    }
}