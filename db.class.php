<?php
        class db{
            private $host = 'localhost';
            private $usuario ='root';
            private $senha = '';
            private $database = 'estudo';
        
        
        public function conecta_mysql(){
            $conect=mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
            mysqli_set_charset($conect, 'utf8');
    
            if (mysqli_connect_errno()){
                echo 'Erro ao conectar ao banco de dados'.mysqli_connect_error();
            }
            return $conect;
        }
        
    
        }
    
?>