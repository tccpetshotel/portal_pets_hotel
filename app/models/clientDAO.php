<?php
require_once "client.php";

class ClientDAO
{
    private $con;
    public $tabela = "tb_client";
    function __construct($con)
    {
        $this->con = $con;
    }
    function save($client)
    {
        $sql = "INSERT INTO" . $this->tabela . "(nome,email,senha,endereco,cidade,estado,celular,nivel) values (?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$client->nome, $client->email, $client->senha, $client->endereco, $client->cidade, $client->estado, $client->celular, $client->nivel]);
    }
}
