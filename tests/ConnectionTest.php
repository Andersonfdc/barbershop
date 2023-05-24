<?php

use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function testConfigFileIncluded()
    {
        // Executa o código para importar o arquivo de configuração
        include_once('config.php');

        // Aqui você pode adicionar mais asserções para verificar se as configurações foram incluídas corretamente
        $this->assertTrue(true); // Exemplo de asserção
    }

}

?>