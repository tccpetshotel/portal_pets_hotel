<?php
require_once "../../helpers/banco.php";
require_once "../../models/clientDAO.php";

$clientDAO = new ClientDAO($pdo);
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$celular = $_POST["celular"];
$nivel = $_POST["nivel"];

$client = Client::criaClient($nome, $email, $senha, $endereco, $cidade, $estado, $celular, $nivel);
$client->setarSenha($senha);
$clientDAO->save($client);
