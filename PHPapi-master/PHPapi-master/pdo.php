<?php
@require_once __DIR__ . '/config.php';

$pdo = new PDO("mysql:host=$localhost:$porta;dbname=$db;charset=utf8", $usuario, $senha);

if(isset($_GET)) foreach($_GET As $ng=>$vg) $_GET[$ng] = filtrar($vg);
if(isset($_POST)) foreach($_POST As $np=>$vp) $_POST[$np] = filtrar($vp);
if(isset($_COOKIE)) foreach($_COOKIE As $nc=>$vc) $_COOKIE[$nc] = filtrar($vc);
if(isset($_REQUEST)) foreach($_REQUEST As $nr=>$vr) $_REQUEST[$nr] = filtrar($vr);
if(isset($_SESSION)) foreach($_SESSION As $ns=>$vs) $_SESSION[$ns] = filtrar($vs);

function filtrar($str)
{
	$str = strip_tags($str);
	$str = trim($str);
	$str = addslashes($str);
	$str = htmlspecialchars(nl2br($str));
	$str = html_entity_decode($str);
	$str = htmlentities($str);
	return $str;
}

function executar($query)
{
	global $pdo;
	$tabela = $pdo->prepare($query);
	$tabela->execute();
	return $tabela;
}

function ler($query)
{
	return executar($query)->fetch();
}

function lista($query)
{
	return executar($query)->fetchAll();
}

function contar($query)
{
	return executar($query)->RowCount();
}

function desfoque($pass)
{
	$chave = "xCg532%@%gdvf^5DGaa6&*rFTfg^FD4\$OIFThrR_gh(ugf*/";
	$pass = md5($pass);
	$pass = sha1($pass);
	$pass = hash('md5', $pass, false);
	$pass = hash('sha512', $pass);
	$pass = crypt($pass, $chave);
	$pass = hash_hmac('md5', $pass, $chave, false);
	$pass = mhash(MHASH_MD5, $pass, $chave);
	return md5($pass.($chave));
}