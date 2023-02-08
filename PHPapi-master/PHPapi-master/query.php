<?php
function user($coluna, $nome)
{
	$nome = filtrar($nome);
	$coluna = filtrar($coluna);

	$user = ler("SELECT * FROM users WHERE nome = '$nome' LIMIT 1;");
	return  $user[filtrar($coluna)];
}

function json($json, $retorno = false)
{
	if ($retorno)
	{
		$json = array(
			'message' => $json
		);
	}
	
	print json_encode($json, JSON_NUMERIC_CHECK);
	exit;
}

function logar($nome, $senha)
{	
	if ($senha === user('senha', $nome))
	{
		return $log = user('id', $nome);
	}
	else {
		json('Senha invalida.', true);
	}
}