<?php 

if($_POST['user'] == 'admin' && $_POST['pass'] == '12345' ){
	echo "logado";
}else{
	echo "logue no sistema";
}