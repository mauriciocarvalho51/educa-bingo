<?php
	function sorteia(){
	
		$min = 1;
		$max = 26;
		$cont = 0;
		$flag = true;
		$arr = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
		
		do{
			$flag = false;
			$rand = Rand($min, $max);
			
			foreach($arr as $valor){			
				if($valor == $rand){ $flag = true; break; }
				}
				
				if($flag == false){
					$arr[$cont] = $rand;
					$cont++;
					}
			}while($cont < 26);
			
			
		print "<hr>";
		for($i = 0; $i < $max; $i++){
			print '<img src="img/'.$arr[$i].'.png">';
			}
	}
	
	sorteia();
?>
