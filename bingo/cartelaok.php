<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>Teste Cartela</title>
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="all" />
		
		<style type="text/css">
			.marcado {
				background-color: red;
			}
		</style>
		              
		<script type="text/javascript" src="jquery-1.11.0.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
			
				var cont = 0;
			
				$("#acao").click(
					function(){
						$.get("indexRand.php", function(data){
							$("#sorteado").html("<img src='img/icones/" + data + ".jpeg'>");
							
							var imgs = $("img");
							//$a = $("table").find(imgs); //.css("border", "3px solid red");
							// alert($a.eq(1).attr("src"));
							//$a = $("table").find(imgs).toArray(); 
							//alert($("table").find(imgs).toArray().eq(0));	
							
							var obj = $("table").find(imgs);
							var arr = $.makeArray(obj);
							
							$.each(arr, function( index, value ) {
									var valor = value.src;
									//alert(valor.indexOf(data));
									if(valor.indexOf(data) > 0) {
										cont++;
										alert("CONTADOR: " + cont);
									}
							});
							
							if(cont == 6)
								alert("BINGOOOOOOOOOOOOOOO!");

							// alert($.isArray(arr));
							// 	alert(jQuery.inArray(data, arr));
						});
				});
				
				$("img").click(function() {
					$( this ).toggleClass( "marcado" );
				});
			});
		</script>
		<script type="text/javascript" src="js/eventomarcarcartela.js">
			function marcar() {
			 window.document.getElementByData("img/icones/" + data + ".jpeg").src = "img/icones/" + data + "marcar.jpeg";
		}
		</script> 
 
    </head>

    <body>
		<div id="topo">
		<!--
			<input type="button" name="jogar" id="jogar" value="JOGAR AGORA!" style="font-size:40px;" />
		-->				
		</div>
		<div id="cartela">
    
		<?php
		
		$min = 1;
		$max = 10;
		$cont = 0;
		$flag = true;
		//$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25);
		$arr = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
		
		do{
			$flag = false;
			$rand = rand($min, $max);
			
			//print "rand: ".$rand."<br/>";
			
			foreach($arr as $valor){			
				if($valor == $rand){ $flag = true; break; }
			}
				
			if($flag == false){
				$arr[$cont] = $rand;
				//echo "=> ".$arr[$cont]."<br/>";
				$cont++;
			}
				
					
		} while($cont < 10);
		
		//echo "ARRAY BRUTO: <br/>";
		//print_r($arr);

		// sorteio do servidor	
		$num = rand($min, $max);
		$sorteado = $arr[$num]; 
		echo "<h3>SORTEADO: ".$sorteado."</h3>";
		// Bug, as vezes vale 0(zero) sem imagem.
		//if($sorteado == 0){ $sorteado = 1; } // POG
			
		echo "<div id='sorteado'>";
		echo "<img src='img/icones/".$sorteado.".jpeg' title=".$sorteado.">";
		//echo "<img src='img/icones/".$sorteado.".jpeg'>";
		echo "</div>";
		echo "<p id='valor' style='display: none;'></p>";
		/*?>*/
	
		echo '<input type="button" name="acao" id="acao" value="Próximo!" style="font-size:40px;"/>';
	
		echo '<table border="8" align="center" bgcolor="white" id="cartela">';

				/*<?php*/
					$i = 0;
					echo "<tr>";
					while($i < 6) {
						echo "<br/>";// Apagar esta linha, unicamente para fins de teste.
						echo 'sorteio/cartão('.$sorteado.' e '.$arr[$i].')'; // Apagar esta linha, unicamente para fins de teste.
						valida_opcao($sorteado, $arr[$i]);
						
						echo "<td><img src='img/icones/".$arr[$i].".jpeg'></td>";
						if($i == 2) echo "</tr><tr>";
						
						$i++;
						
					}
					echo "</tr>";

					/*
					entrar codigo "onclick" p/ marcar/desmarcar icones na cartela
					*/
					
					/*
					 * valida_opcao()
					 * Pega o elemento sorteado e verifica se o mesmo se encontra na tabela.
					 * http://api.jquery.com/attr/
					 * */
					 function valida_opcao($sortado, $index){
							$sort = $sortado;
							$img_name = $index;
							$existe = false;

							if($sort == $img_name){
								$existe = true;
								echo ' <- existe!'; // Apagar esta linha, unicamente para fins de teste.
							}
							//return $existe;
					}
				?>
			</table>
			
			<input type="button" name="bingar" id="bingar" value="BINGO!!!" style="font-size:40px;" />
			
		</div>

    </body>
</html>