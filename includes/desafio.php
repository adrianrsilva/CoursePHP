<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Adrian', 21, 'adriansilva');
$usuario->apresentar();
unset($usuario);







?>