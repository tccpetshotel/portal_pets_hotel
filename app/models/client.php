<?php
class Client
{
    public $id, $nome, $email, $senha, $endereco, $cidade, $estado, $celular, $nivel;
    static function criaClient($id, $nome, $senha, $endereco, $cidade, $estado, $celular, $nivel)
    {
        $client = new Client();
        $client->id = $id;
        $client->nome = $nome;
        $client->senha = $senha;
        $client->endereco = $endereco;
        $client->cidade = $cidade;
        $client->estado = $estado;
        $client->celular = $celular;
        $client->nivel = $nivel;
        return $client;
    }
    function setarSenha($senha)
    {
        $this->senha = md5($senha);
    }
}
