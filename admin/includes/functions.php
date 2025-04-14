<?php



	function alert()

	{

		$parametros=func_get_args();

		$mensagem=$parametros[0];

		$link=$parametros[1];

		

		echo "<script>";

		echo "		Alert('Mensagem do Sistema','$mensagem','','$link')";

		echo "</script>";

		exit();

	}

	

	function redir($url){

		echo "<script>";

		echo "	document.location.href='$url';";

		echo "</script>";

	}

	

	function codificacao($string) 

	{

        $tipo=mb_detect_encoding($string.'x', 'UTF-8, ISO-8859-1');

		

		if($tipo!="UTF-8")

		{

			return utf8_encode($string);

		}

		else

		{

			return $string;

		}

    }

	

	function limpeza($conn,$str)

	{ 

		 $str = mysqli_real_escape_string($conn,$str);

		 return $str;

	}



	function limpeza_sql($str){ 

	 	# Remove palavras suspeitas de injection.

	 

	 	//$str = preg_replace(sql_regcase("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $str);

	 

		//$str = preg_replace(sql_regcase(""), "", $str);

		

		$search  = array("/", "(", "\n", "\r", "%0a", "%0d", "Content-Type:", "bcc:", "to:", "cc:", "Autoreply:", "from", "select", "insert", "delete", "where", "drop table", "show tables", "#", "*", "-");

		$replace = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");

	

		$str =  str_replace($search, $replace, $str);

		

		

		$str = trim($str); # Remove espaços vazios.

		$str = strip_tags($str); # Remove tags HTML e PHP.

		$str = addslashes($str); # Adiciona barras invertidas à uma string.

		return $str;

	}



	function dateTime2portugues($dateTime){

    	$date = explode('-',$dateTime);

    	$time = explode(' ',$date[2]);

    	if (!@checkdate($date[1],$time[0],$date[0])) {

    		return 'Data inválida';

    	}else {

    		return $time[0].'/'.$date[1].'/'.$date[0].' '.$time[1];    		

    	}

    } 

	

	function resumo($string,$chars) {



		 if(strlen($string) > $chars) {



			  $string_aux = substr($string,$chars);



			  $string = substr($string,0,$chars);



			  $string_split = str_split($string_aux);



			  $c = 0;       



			  while($c<=count($string_split)){



				   if($string_split[$c] == " "){



						break;



				   }



				   $string .= $string_split[$c];



				   $c++;



			  }        



			  $string .= "...";



		 }



		 return strip_tags($string);



	}



	 function ordenarcategorias($pos, $id){

		$ordena = "UPDATE categorias set ordem = '$pos' where id = '$id'";

		echo $ordena;

		mysqli_query($conn,$ordena);

	 }



	function status(){

	

	?>

		<label for="status">Status</label>
		<input type="hidden" name="turma" value="<?=$_SESSION['turma']?>">
		<select id="status" class="custom-select" name="status">
			<option <?=empty($_GET['status']) ? "selected" : NULL?> value="">Ativo/Inativo</option>

			<option <?=!empty($_GET['status']) && $_GET['status'] == 'S' ? "selected" : NULL?> value="S">Ativo</option>

			<option <?=!empty($_GET['status']) && $_GET['status'] == 'N' ? "selected" : NULL?> value="N">Inativo</option>
		</select>


	<?php

		

	}



	function cadastra_imagem($conn,$pasta,$tabela){

		

		if(!empty($_FILES['imagem']['name'])){

		

			$ext=strtolower(strrchr($_FILES['imagem']['name'],'.'));



			if(($ext=='.jpg') || ($ext=='.jpeg') || ($ext=='.png') || ($ext=='.jpe') || ($ext=='.JPEG') || ($ext=='.JPG') || ($ext=='.PDF') || ($ext=='.pdf')){

				

				$arquivo=time().$ext;

				

				if(move_uploaded_file($_FILES['imagem']['tmp_name'],"../content/$pasta/$arquivo")){

					

					$querys = "$arquivo";

					return $querys;

					

				}else{

					

					alert('Erro ao mover a imagem','panel.php?m='.$pasta.'&a=novo.php');

					

				}

			}

			else{

				

				alert('Não aceitamos está extensão de imagem','panel.php?m='.$pasta.'&a=novo.php');

				

			}



		}

		

		else{

			

			alert('Selecione uma imagem','panel.php?m='.$pasta.'&a=novo.php');

			

		}

	

	}



	function atualiza_imagem($conn,$pasta,$tabela,$id){

		

		if(!empty($_FILES['imagem']['name'])){

			

			$ext=strtolower(strrchr($_FILES['imagem']['name'],'.'));

			

			if(($ext=='.jpg') || ($ext=='.jpeg') || ($ext=='.png') || ($ext=='.jpe') || ($ext=='.JPEG') || ($ext=='.JPG') || ($ext=='.PDF') || ($ext=='.pdf')){

			

				$arquivo=time().$ext;



				if(move_uploaded_file($_FILES['imagem']['tmp_name'],"../content/$pasta/$arquivo")){



					$querys = "imagem = '$arquivo',";

					return $querys;



				}else{



					alert('Erro ao mover a imagem','panel.php?m='.$pasta.'&a=listar.php');



				}

			}

			else{

			

				alert('Não aceitamos está extensão de imagem','panel.php?m='.$pasta.'&a=listar.php');

			

			}

			

		}

		else{

			return "";

		}

		

	}



	function remove_imagem($pasta,$dados){

		

		if(!empty($_FILES['imagem']['name'])){

			

			$remover_arquivo = "../content/$pasta/".$dados['imagem'];

			

			if(file_exists($remover_arquivo)){

				unlink($remover_arquivo);

			}

			

		}

		

	}



	function excluir_imagem($pasta,$dados){



		$remover_arquivo = "../content/$pasta/".$dados['imagem'];



		if(file_exists($remover_arquivo)){

			unlink($remover_arquivo);

		}



	}



	function excluir($conn,$tabela,$pasta,$id){

		

		return $query = "UPDATE $tabela SET excluido = 'S' WHERE id = $id";

			

	}



	function ordenar($conn,$tabela,$array,$campo,$filtro){

		

		if(!empty($campo) && !empty($filtro)){

			$querys = "AND $campo = '$filtro'";

		}

		else{

			$querys = '';

		}

		

		$pos = 0;

		

		foreach($array as $arr){

			$ordena = "UPDATE $tabela set ordem = '$pos' where id = '$arr' $querys";

			mysqli_query($conn,$ordena);

			$pos++;

		}

		

	}



	function caracteres($dados,$campo,$max_caract){



	if(!empty($dados))

		$campo_dados = strlen($dados[$campo]);

	else

		$campo_dados = 0;



	?>



		<div class="caracteres_permitidos">

			Caracteres permitidos: 

			<span id="caracteres_permitidos_<?=$campo?>"><?=$campo_dados?></span> / <?=$max_caract?>

		</div>



		<script>

			$('#<?=$campo?>').keyup(function() {

				var maxLength = parseInt($(this).attr('maxlength')); 

		        var length = $(this).val().length;

		        var newLength = maxLength-length;

		        var name = $(this).attr('name');

				$('#caracteres_permitidos_<?=$campo?>').text(length);

		    });

		</script>



	<?php



	}



	function url($titulo){



//		$titulo = utf8_encode($titulo);



/*		if(strlen($titulo)>40){



			$titulo = substr($titulo, 0, 40);



		}



*/



		$titulo = strtolower($titulo);



		$titulo = str_replace("ã", "a", $titulo);



		$titulo = str_replace("Ã", "a", $titulo);



		$titulo = str_replace("õ", "o", $titulo);



		$titulo = str_replace("Õ", "o", $titulo);



		$titulo = str_replace("á", "a", $titulo);



		$titulo = str_replace("Á", "a", $titulo);



		$titulo = str_replace("é", "e", $titulo);



		$titulo = str_replace("É", "e", $titulo);



		$titulo = str_replace("í", "i", $titulo);



		$titulo = str_replace("Í", "i", $titulo);



		$titulo = str_replace("ó", "o", $titulo);



		$titulo = str_replace("Ó", "o", $titulo);



		$titulo = str_replace("ú", "u", $titulo);



		$titulo = str_replace("Ú", "u", $titulo);



		$titulo = str_replace("ç", "c", $titulo);



		$titulo = str_replace("Ç", "c", $titulo);



		$titulo = str_replace(",", "", $titulo);



		$titulo = str_replace(".", "", $titulo);



		$titulo = str_replace(" ", "-", $titulo);



		$titulo = str_replace("_", "-", $titulo);



		$titulo = str_replace("(", "", $titulo);



		$titulo = str_replace(")", "", $titulo);



		$titulo = str_replace(":", "", $titulo);



		$titulo = str_replace("ª", "", $titulo);



		$titulo = preg_replace("/[^a-zA-Z0-9\s]/", " ", $titulo);



		$titulo = str_replace(" ", "-", $titulo);



		$titulo = str_replace("--", "-", $titulo);







		if(substr($titulo, -1)=='-' || substr($titulo, -1)==' ' || substr($titulo, -2)=='-'){



			$titulo = substr($titulo, 0, 37);



		}



		return $titulo;



	}

	function formatarCategoria($categoria) {
		switch ($categoria) {
			case "bercario1":
				return "Berçário 1";
			case "bercario2":
				return "Berçário 2";
			case "maternal1":
				return "Maternal 1";
			case "maternal2":
				return "Maternal 2";
			case "jardim1":
				return "Jardim 1";
			case "jardim2":
				return "Jardim 2";
			default:
				return "Categoria Inválida";
		}
	}
	

?>	