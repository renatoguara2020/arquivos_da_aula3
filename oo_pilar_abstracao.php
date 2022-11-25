<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "$this->nome possui $this->numFilhos filhos(s)";
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    // echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) ';
    echo '<br />';
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) ';
  
    
  
?>