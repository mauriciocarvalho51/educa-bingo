<?php


	//socket é criado
	IF(!($sock= socket_create(AF_INET, SOCK_STREAM,0)));
	{
		$errorcode = socket_last_error();
		$errormsg = socket_strettor($errorcode);
	
		die("O socket não pode ser criado: [$errorcode] $errormsg");	
	}
	
	echo "Socket criado";

	//tenta conectar com o servidor 
	if(!(socket_connect($sock, '177.19.178.190', 80)))
	{
		$errorcode = socket_last_error();
		$errormsg = socket_strettor($errorcode);
		
		die("O socket não pode ser criado: [$errorcode] $errormsg");
	}
	
	echo "Conexão realizada com sucesso";
	
	//recebe dados do servidor
	if(socket_recv ( $sock , $buf , 2045 , MSG_WAITALL ) === FALSE)
	
	{
		$errorcode = socket_last_error();
		$errormsg = socket_strerror($errorcode);
     
		die("Não pode receber dados do servidor: [$errorcode] $errormsg \n");
	}
	
	echo $buf;
		
?>