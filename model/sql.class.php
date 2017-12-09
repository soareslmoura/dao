<?php


class Sql extends PDO{
    
    private $conn;
    
    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost; dbname=teste_PDO","root","");
    }
    
    public function select($rowQuery, $params = array()){
            
            $stmt = $this->query($rowQuery, $params);
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function query($rowQuery, $params = array()){
        
        //Preparando a query bruta. O PDO exige que se prepare a query antes de executar
        $stmt = $this->conn->prepare($rowQuery);
        
        $this->setParams($stmt, $params);
        
        $stmt->execute();
        return $stmt;
        
    }   
    
    
    public function setParams($statement, $params = array()){
        
         //foreach pra rodar dentro do array de paramentros da query.
        foreach($params as $key => $value){
            
            //Bindparam é usado pra ligar a chave ao paramentro. Dentro de um foreach serve pra deixar os parametros da query dinamico
            $this->setParam($statement,$key,$value);
        
        }
    }
        
        
    private function setParam($statement , $key, $value){
            
            $statement->bindParam($key, $value);
    } 
        
   
    
}



?>