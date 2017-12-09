<?php

class Usuario{
    
    private $userNome;
    private $userEmail;
    private $userSenha;
    private $idUser;
    
    
    public function getidUser(){
        return $this->idUser;
    }
    
    public function setidUser($value){
        $this->idUser = $value;
    }
    
    public function getuserNome(){
        return $this->userNome;
    }
    
    public function setuserNome($value){
        $this->userNome = $value;
    }
    
    public function getuserSenha(){
        return $this->userSenha;
    }
    
    public function setuserSenha($value){
        $this->userSenha = $value;
    }
    
    public function getuserEmail(){
        return $this->userEmail;
    }
    
    public function setuserEmail($value){
        $this->userEmail = $value;
    }
    
    public function loadById($id){
        $sql = new Sql();
        
        $result = $sql->select("SELECT * FROM tb_user WHERE idUser = :ID",array(
        ":ID"=>$id
        ));
        
        if(count($result)>0){
            $data = $result[0];
            
            $this->setidUser($data['idUser']);
            $this->setuserNome($data['userNome']);
            $this->setuserSenha($data['userPass']);
            $this->setuserEmail($data['userEmail']);
        }
    }
    
    public function __toString(){
        
        return json_encode(array(
            "idUser"=>$this->getidUser(),
            "userNome"=>$this->getuserNome(),
            "userPass"=>$this->getuserSenha(),
            "userEmail"=>$this->getuserEmail()        
        ));
    }
    
    
}


?>