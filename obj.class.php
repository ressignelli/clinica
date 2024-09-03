<?php

    class Cliente{

        public $cpf;
        public $nome;
        public $data_ag_cons;
        public $hora_ag_cons;
        public $retorno;
        public $Lib_retorno;

        public function __construct(){

        }

        public function obtercpf(){
            return $cpf;
        }
    }

    class DadosCons{
        public $data_Cons;
        public $id_Cons;
        public $hora_Cons;

        public function __construct(){

        }
    }

?>