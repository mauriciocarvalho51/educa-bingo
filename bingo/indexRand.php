<?php
	
	
	session_start();
	//session_destroy();
		
	function sorteia()
	{
	
		$min = 1;
		$max = 10;
		$cont = 0;
		$flag = false;
		
	
		$rand = rand($min, $max);
		
		if(empty($_SESSION["valores"])) {
			//echo "aaaaaaaaaaaaaaa";
			$_SESSION["valores"][] = $rand;	 	
		} else {
		
			
		
			foreach($_SESSION["valores"] as $valor){		
				//echo "VALOR: ".$valor." -> ".$rand."</br>";
				if($valor == $rand){ $flag = true; break; }
			}
			
			$_SESSION["valores"][] = $rand;		
		}
				
		if($flag == false){
			return $rand;
		} else {
			return sorteia();
		}
		//else {
			//echo sorteia();
		//}
		
			
		//print "<hr><ul>";
		//for($i = 0; $i < $max; $i++){
			//print "<li>arr[".$arr[$i]."]</li>";
		//	print '<img src="img/'.$arr[$i].'.png">';
		//	}
		//print "</ul>";
	}
	
	echo sorteia();
	//echo "==> sorteado: ".sorteia();
	//print_r($_SESSION["valores"]);
?>
