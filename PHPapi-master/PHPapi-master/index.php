<?php
header("Access-Control-Allow-Origin: *");
@require_once __DIR__ . '/pdo.php';
@require_once __DIR__ . '/query.php';

header('Content-Type: application/json');

if(!isset($_GET['nome'])) json('...', true);

$nome = filtrar($_GET['nome']);

if(!user('nome', $nome)) json('Cliente invalido.', true);

if(isset($_GET['senha'])) {
	$senha = desfoque(filtrar($_GET['senha']));
	$json = array(
		'login' => logar($nome, $senha)
	);
	json($json);
}

$json = array(
	'ID' => user('id', $nome),
	'nome' =>  user('nome', $nome),
	'email' =>  user('email', $nome)
);

json($json);