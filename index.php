<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Examen</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>

<body>
	<div class="row">
		<div class="col-md-4">
			<div class="login-box">
      <div class="login-logo">
        <a><b>Examen</b>WEB</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Inicie Sesion</p>
           		<form>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                         <input type="password" class="form-control" placeholder="Clave" name="clave">
                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                          
                   
                          
                    <div class="row" style="text-align: center">
                     <button type="submit"  name="btn_login" class="btn btn-primary">Ingresar</button>
                    </div>
                 </form>
                 <?php 
					if (isset($_REQUEST['btn_login'])) 
						{ 		
 						obtenerArray($nombre = $_GET['usuario']);
						} 
				?>

    
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
		</div>
	</div>
</body>
<?php
	function obtenerArray($text){
		$key = array("K","E","Y","K","E","Y","K","E","Y","K");
		$keyAscii;
		$codigoA;
		$arr1 = str_split($text);

		$sumaAsci;
		$resultado = count($arr1);
		//return $arr1;
		//echo $resultado;
		echo "<br>Codigo ASCCI:";
		for ($i=0; $i < $resultado ; $i++) { 
			echo  ord($arr1[$i])." ";
			$codigoA[$i]=ord($arr1[$i]);
		}
		$tamCodigoA = count($codigoA);
		echo "<br>Tamaño".$tamCodigoA;

		echo "<br>Codigo ASCCI de key:";
		for($x=0; $x<count($key);$x++){
			echo  ord($key[$x])." ";
			$keyAscii[$x]=ord($key[$x]);
		}
		$tamKeyA = count($keyAscii);
		echo "<br>Tamaño".$tamKeyA;


		for ($i=0; $i < count($codigoA) ; $i++) { 
			$sumaAsci[$i]=$codigoA[$i]+$keyAscii[$i];

		}
		
		$varArrya;
		echo "<br>";
		for ($i=0; $i <count($sumaAsci) ; $i++) { 
			$var=$sumaAsci[$i];
			echo chr($var/2);
			//echo convert_cyr_string ( $var , "k" ,"w" );
		//echo "<br>CHR ".chr((int)($var))."<br>";
		//printf("%c", "valor".chr(($var)));
			
		}


		/*$txtsuma =implode(",",$sumaAsci);
		//echo "<br>CHR ".chr($sumaAsci)."<br>";
		echo "<br>".$txtsuma;
		//$arr2 = str_split($txtsuma);
		//print_r($arr2);
		//var_dump($arr2);


		 $arrySumaAs;
		 $aux;
		 $bol=false;
		for($i=0;$i<strlen($txtsuma);$i++){ 
    		//echo "<br>".$txtsuma[$i];
    		if($txtsuma[$i]!=",")
    		{
    			$bol=true;

    		}
    		if($bol==true){
    			$aux=$txtsuma[$i];
    		}
    		echo "<br>".$aux;
    		
		}  */
	}
?>

</html>