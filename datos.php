<?php 
$conexion=mysqli_connect('localhost','root','','selects');
$continente=$_POST['continente'];

	$sql="SELECT id,
			 id_continente,
			 pais 
		from t_mundo 
		where id_continente='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>SELECT 2 (paises)</label> <br><br>
			<select id='lista2' name='lista2' class='form-control'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";

?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista2').select2();
	});
</script>