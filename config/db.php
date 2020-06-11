<?php 

    class DB{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;


        public function __construct(){
            $this->host     ='192.168.99.100';
            $this->db       ='techochile';
            $this->user     = 'root';
            $this->password = 'BNX65K308857';
            $this->charset  = 'utf8mb4';
        }

        function connect() {
            try{
                 $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
                $option = [
                    PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES     => false
                ];

                $pdo = new PDO($connection, $this->user, $this->password);

                return $pdo;
            }catch(PDOException $e){
                print_r('Error de conexión: ' . $e->getMessage());
            }

        }
    }

?>