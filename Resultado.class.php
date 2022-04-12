<?php
require_once("Cadastro.class.php");

class Resultado {
    private $nome;
    private $email;


    public function _construct() {
        $cadastro = new Cadastro();
        $cadastro->setNome($_POST['nome']);
        $cadastro->setEmail($_POST['email']);

        echo $cadastro->getNome() . "<br>" . $cadastro->getEmail();
        
    }

    
}

?>