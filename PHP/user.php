<?php
class user{
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $datadenascimento;
    private $CPF;
    private $status;
#########################################################VAR###################################################################################
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status=$status;
    }
    public function getCPF()
    {
        return $this->CPF;
    }
    public function setCPF($CPF)
    {
        $this->CPF=$CPF;
    }
    public function getDatadenascimento()
    {
        return $this->datadenascimento;
    }
    public function setDatadenascimento($datadenascimento)
    {
        $this->datadenascimento=$datadenascimento;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone=$telefone;
    }
    public function getNome() 
    {
        return $this->nome;
    }
      public function setNome($nome)
    {
        $this->nome= $nome;
    }
      public function getEmail()
    {
          return $this->email;
    }
      public function setEmail($email)
    {
        $this->email= $email;
    }
      public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
     {
        $this->senha=$senha;
     }
###################################################SQLs#########################################################################################
     public function Insert($user){
         $queryinsert="Insert into gamplu06_Mysql.tbl_user(nome,email,telefone,datanascimento,senha,cpf) 
         values('[nome]', '[email]','[telefone]','[datanascimento]','[senha]','[cpf]');";

         $queryinsert=str_replace('[nome]',$user->getNome(),$queryinsert);
         $queryinsert=str_replace('[email]',$user->getEmail(),$queryinsert);
         $queryinsert=str_replace('[telefone]',$user->getTelefone(),$queryinsert);
         $queryinsert=str_replace('[datanascimento]',$user->getDatadenascimento(),$queryinsert);
         $queryinsert=str_replace('[senha]',$user->getSenha(),$queryinsert);
         $queryinsert=str_replace('[cpf]',$user->getCPF(),$queryinsert);
         return $queryinsert;
     }
     public function selectID($user){
        $queryinsert="Select tbl_user.id_user 
        from gamplu06_Mysql.tbl_user 
        Where tbl_user.nome=('[nome]') 
        AND tbl_user.email=('[email]')AND tbl_user.telefone=('[telefone]') 
        AND tbl_user.datanascimento=('[datanascimento]'),
        AND tbl_user.senha=('[senha]')
        AND tbl_user.CPF=('[cpf]');";

        $queryinsert=str_replace('[nome]',$user->getNome(),$queryinsert);
        $queryinsert=str_replace('[email]',$user->getEmail(),$queryinsert);
        $queryinsert=str_replace('[telefone]',$user->getTelefone(),$queryinsert);
        $queryinsert=str_replace('[datanascimento]',$user->getDatadenascimento(),$queryinsert);
        $queryinsert=str_replace('[senha]',$user->getSenha(),$queryinsert);
        $queryinsert=str_replace('[cpf]',$user->getCPF(),$queryinsert);
        return $queryinsert;
     }
###################################################FUNCTION#########################################################################################
     public function toString($user){
         return  $user->getNome().", ".$user->getEmail().", ".$user->getTelefone().", ".
         $user->getDatadenascimento().", ".$user->getCPF().", ".$user->getSenha().",".$user->getStatus();
     }
}
?>