<?php
    class DbConnection{
        //create connection to the database
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "tikiti";

        protected $connection;

        public function __construct(){
            if(!isset($this->connection)){
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);

                if(!$this->connection){
                    echo "Cannot connect to the database";
                    exit;
                }
            }

            //Successfull connection
            return $this->connection;
        }
    }
?>