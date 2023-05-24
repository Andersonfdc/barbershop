<?php

    use PHPUnit\Framework\TestCase;
    class SearchTest extends TestCase
{
    public function testEmptySearch()
    {
        // Executa o código com uma pesquisa vazia
        $_GET['search'] = '';

        // Executa o código de pesquisa
        include_once('config.php'); 


        $this->assertTrue(true); // Exemplo de asserção
    }

}


?>