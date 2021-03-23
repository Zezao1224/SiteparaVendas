<?php
class conexao{

    private $dbhost = "ns548.hostgator.com.br";
    private $dbuser = "gamplu06_admin";
    private $dbpass = "@Muitodoido12";
    private $db = "gamplu06_Mysql";

    function OpenConect(){
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function Cmd($conn,$query){
        if(mysqli_query($conn, $query)) {
            return true;
        } else {
            return false;
        }
    }
    function Desconect($conn){
        $conn->close();
    }
}
?>