﻿<?php 
	if(!(include "config.php")){
		die("<center>FATAL ERROR: Arquivo de configuração não encontrado</center>");
	}
?>
<?php if(!(empty($passon)) && ($access < 40)){ ?>
<?php
function noSqlInjection($string){
   
        $string = trim($string);
        $string =str_replace("'","",$string);//aqui retira aspas simples <'>
        $string =str_replace("\\","",$string);//aqui retira barra invertida<\\>
        $string =str_replace("UNION","",$string);//aqui retiro  o comando UNION <UNION>
       
        $banlist = array(" insert", " select", " update", " delete", " distinct", " having", " truncate", "replace"," handler", " like", " as ", "or ", "procedure ", " limit", "order by", "group by", " asc", " desc","'","union all", "=", "'", "(", ")", "<", ">", " update", "-shutdown",  "--", "'", "#", "$", "%", "¨", "&", "'or'1'='1'", "--", " insert", " drop", "xp_", "*", " and");
        // ---------------------------------------------
        if(eregi("[a-zA-Z0-9]+", $string)){
                $string = trim(str_replace($banlist,'', strtolower($string)));
        }
       
        return $string;
       
    }//END function noSqlInjection($string)
    ?>
<html>
	<head>
		<title>Restricted access - ASPLIT</title>
	   <link rel="shortcut icon" href="./kqw.ico">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0-alpha' type='text/css' media='all' />
	</head>
	<body>
		<div id="tudo">
			<div>&nbsp </div>
			<div id="conteudo" class="shadow">
				<p> &nbsp </p>
				<div style="height: 30px;">&nbsp </div>
				<p><center><img src="images/asplit.png" alt=""> </br>only!</center></p>
				<p><a href=".."><center>&raquo Back to the game!</center></a></p>
			</div>
		</div>
	</body>
</html>
<?php }else if(!(empty($passon))){ ?>
	<head>
		<title>ASPLIT - Upload</title>
		<link rel="stylesheet" href="template/css/style.css">
		<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0-alpha' type='text/css' media='all' />
		<script>
			function exibeMsg(valor){
				switch (valor){
					case 'Class':
						document.getElementById('upload').innerHTML = '<b>Male:</b> <input type="file" name="arquivo" /><br /><b>Female:</b> <input type="file" name="arquivo1" />';
					break;
					case 'Armor':
						document.getElementById('upload').innerHTML = '<b>Male:</b> <input type="file" name="arquivo" /><br /><b>Female:</b> <input type="file" name="arquivo1" />';
					break;
					default:
						document.getElementById('upload').innerHTML = '<b>Arquivo:</b> <input type="file" name="arquivo" />';
					break;
				}
			}
		</script>
	</head>
<center>
	<h2>File Upload</h2>
	
	<?php if(isset($_GET['tipo'])){ ?>
	
		Diret�rio Atual
		<br />
	
	<?php }else{ ?>
		<?php
			if(isset($_POST['manda'])){
				$continua = true;
				$tipo = $_POST['tipo'];
				switch($tipo){
					case "image":
						$destino_file = "users/";
					break;
					case "Dagger":
						$destino_file = "items/daggers/";
					break;
					case "Staff":
						$destino_file = "items/staves/";
					break;
					case "Polearm":
						$destino_file = "items/polearms/";
					break;
					case "Axe":
						$destino_file = "items/axes/";
					break;
					case "Mace":
						$destino_file = "items/maces/";
					break;
					case "Armor":
						$destino_file = "classes/";
					break;
					case "Class":
						$destino_file = "classes/";
					break;
					case "Pet":
						$destino_file = "items/pets/";
					break;
					case "Helm":
						$destino_file = "items/helms/";
					break;
					case "Cape":
						$destino_file = "items/capes/";
					break;
					default:
						$continua = false;
					break;
				}
				
				$_UP['pasta'] = 'images/' . $destino_file;
				if(($tipo == "Class") || ($tipo == "Armor")){
					$_UP['pasta'] = 'images/' . $destino_file . 'M/';
				}

				$_UP['tamanho'] = 1024 * 1024 * 10;
				$_UP['extensoes'] = array('png');
				$_UP['renomeia'] = false;

				if ($_FILES['arquivo']['error'] != 0) {
					$continua = false;
				}
				
				if($continua){
					$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
					if (array_search($extensao, $_UP['extensoes']) === false) {
						$continua = false;
					}else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
						$continua = false;
					}else {
						if ($_UP['renomeia'] == true) {
							$nome_final = time().'.png';
						} else {
							$nome_final = $_FILES['arquivo']['name'];
						}
						
						if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
							#Sucesso
						} else {
							$continua = false;
						}
					}
				}
				
				if($continua && ($tipo == "Class" || $tipo == "Armor")){
					$_UP['pasta'] = 'images/' . $destino_file . 'F/';

					$_UP['tamanho'] = 1024 * 1024 * 10;
					$_UP['extensoes'] = array('png');
					$_UP['renomeia'] = false;

					if ($_FILES['arquivo1']['error'] != 0) {
						$continua = false;
					}
					
					if($continua){
						$extensao = strtolower(end(explode('.', $_FILES['arquivo1']['name'])));
						if (array_search($extensao, $_UP['extensoes']) === false) {
							$continua = false;
						}else if ($_UP['tamanho'] < $_FILES['arquivo1']['size']) {
							$continua = false;
						}else {
							if ($_UP['renomeia'] == true) {
								$nome_final = time().'.png';
							} else {
								$nome_final = $_FILES['arquivo1']['name'];
							}
							
							if (move_uploaded_file($_FILES['arquivo1']['tmp_name'], $_UP['pasta'] . $nome_final)) {
								#Sucesso
							} else {
								$continua = false;
							}
						}
					}
				}
				
				if($continua){
					echo "<b style='color: green;'>Sucess, close the window!<br /></b>";
				}else{
					echo "<b style='color: red;'>ERROR!<br /></b>";
				}
			}
		?>

		<form method="post" action="" enctype="multipart/form-data">
			<label>Type: </label>

			<select name="tipo" onchange="exibeMsg(this.value);">
				<option value="image">Image</option>
			</select>
			<br /><br />
			<p id="upload">
				<b>File:</b> <input type="file" name="arquivo" />
			</p>
			<br />
			<input type="submit" name="manda" value="Enviar" />
			</form>
	<?php } ?>
<?php }else{ ?>
	<?php include "login.php"; ?>
<?php } ?>