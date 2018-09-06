<?php
class dbconsultapessoafisica {

    //host
    public $host = 'locahost';

    //usuario
    public $usuario = 'root';

    //senha
    public $senha = '';

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