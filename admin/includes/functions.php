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
	function state(){
	?>
		<label for="state">Status</label>
		<input type="hidden" name="turma" value="<?=$_SESSION['turma']?>">
		<select id="state" class="custom-select" name="state">
			<option <?=empty($_GET['state']) ? "selected" : NULL?> value="">Ativo/Inativo</option>
			<option <?=!empty($_GET['state']) && $_GET['state'] == 'S' ? "selected" : NULL?> value="S">Ativo</option>
			<option <?=!empty($_GET['state']) && $_GET['state'] == 'N' ? "selected" : NULL?> value="N">Inativo</option>
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

	/**
	 * Converte um valor para reais (R$) e formata com vírgula como separador decimal
	 * e ponto como separador de milhar.
	 *
	 * @param float $price Valor a ser formatado
	 * @return string Valor formatado
	 */
	function formatToReal($price) {
		return 'R$ ' . number_format($price, 2, ',', '.');
	}

	function formatDateBr($data) {
		if ($data) {
			return date('d/m/Y', strtotime($data));
		}
		return null;
	}

	function formatHour($hora) {
		if ($hora) {
			return date('H:i', strtotime($hora));
		}
		return null;
	}
	
	


?>	