<?php


    use PHPUnit\Framework\TestCase;

    class SessionTest extends TestCase
    {
        public function testSessionStart()
            {
                $this->assertFalse(session_id()); // Verifica se a sessão não está iniciada inicialmente

                // Limpa as variáveis de sessão existentes
                session_unset();

                // Executa o código para iniciar a sessão
                session_start();

                $this->assertNotFalse(session_id()); // Verifica se a sessão foi iniciada com sucesso
            }
    }


?>