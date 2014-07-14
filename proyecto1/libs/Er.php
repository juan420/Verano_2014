<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	
	
function validarUsuario($nombre)
{
    return preg_match("#^[a-z][da-z_]{6,22}[a-zd]$#i", $nombre);
}
//ejm:
if(validarUsuario("nombreUsuario"))
{
    echo "usuario valido";
}
else
{
    echo "usuario invalido";
}


function validarEmail($email)
{
    $reg = "#^(((([a-zd][.-+_]?)*)[a-z0-9])+)@(((([a-zd][.-_]?){0,62})[a-zd])+).([a-zd]{2,6})$#i";
    return preg_match($reg, $email);
}
 
//ejm:
if(validarEmail("cesar@gmail.com"))
{
    echo "email valido";
}
else
{
    echo "email invalido";
}

function validarFecha($fecha){
    $sep = "[/-.]";
    $req = "#^(((0?[1-9]|1d|2[0-8]){$sep}(0?[1-9]|1[012])|(29|30){$sep}(0?[13456789]|1[012])|31{$sep}(0?[13578]|1[02])){$sep}(19|[2-9]d)d{2}|29{$sep}0?2{$sep}((19|[2-9]d)(0[48]|[2468][048]|[13579][26])|(([2468][048]|[3579][26])00)))$#";
    return preg_match($reg, $fecha);
}
//ejm:
if(validarFecha("12/01/2009"))
{
    echo "fecha valida";
}
else
{
    echo "fecha invalida";
}
[/php
 
<h3 id="validar_ip">4. Validar Direcci&oacute;n IP </h3>
<p>Valida que una dirección IP este dentro del rango 0.0.0.0 a 255.255.255.255</p>
1
function validarIP($ip)
{
    $val_0_to_255 = "(25[012345]|2[01234]d|[01]?dd?)";
    $reg = "#^($val_0_to_255.$val_0_to_255.$val_0_to_255.$val_0_to_255)$#";
    return preg_match($reg, $ip, $matches);
}
//ejm:
if(validarIP("192.168.1.1"))
{
    echo "IP valida";
}
else
{
    echo "IP invalida";
}

function validarTelefono($numero)
{
  $reg = "#^(?d{3})?[s.-]?d{3}[s.-]?d{4}$#";
  return preg_match($reg, $numero);
}
//ejm:
if(validarTelefono("(511)-311-4541"))
{
    echo "telefono valido";
}
else
{
    echo "telefono invalido";
}

s=function verificar_password_strenght($password) { 
if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) 
echo "Su password es seguro."; else echo "Su password no es seguro."; } - 

	
}


?>    