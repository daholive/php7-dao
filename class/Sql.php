<?php 

    class Sql extends PDO {

        private $conn;

        public function __construct()
        {   
            $this->conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESSSERVER;ConnectionPooling=0","sa","root");
        }

        private function setParams($statment, $parameters = array()){

            foreach ($parameters as $key => $value){
                $this->setParam($key, $value);
            }

        }

        private function setParam($statment, $key, $value){

            $statment->bindParam($key, $value);
        }

        public function query($rawQuery, $params = array()){

            $stmt = $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);

            $stmt->execute();
        
            return $stmt;
        }

        public function select($rawQuery, $param = array()):array {
            
            $stmt = $this->query($rawQuery, $param);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>