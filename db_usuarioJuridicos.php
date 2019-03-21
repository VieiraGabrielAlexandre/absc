<?php
class dbconsultapessoajuridica {

    //host
        public $host = 'localhost:55504';
        /*
        $servidor = "127.0.0.1:55504";
        $usuario = "azure";
        $senha = "6#vWHD_$";
        $dbname = "localdb";
        */
        //usuario
        public $usuario = 'azure';

        //senha
        public $senha = '6#vWHD_$';

        //banco de dados
        public $database = 'usuarios';

        public function conecta_mysql(){
         
        //cria a conexão
        $con2 = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		
        //ajustar charset de comunicação entre aplicação e banco de dados
        mysqli_set_charset($con2, 'utf-8');

        //vericar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Houve um erro ao tentar se conectar ao banco de dados: ' .mysqli_connect_error();
        }

        return $con2;

    }

}