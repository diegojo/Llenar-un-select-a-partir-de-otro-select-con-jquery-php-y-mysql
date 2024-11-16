<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Llenar select a partir de otro con php y mysql</title>
	<!-- Select 2 -->
	<link rel="stylesheet" type="text/css" href="select2/css/select2.css">
    <script src="select2/jquery-3.1.1.min.js"></script>
    <script src="select2/js/select2.js"></script>
	
</head>
<body>
	<h2>Llenar un select a partir de otro select con jquery y php</h2>

			<label>SELECT 1 (Continentes)</label> <br><br>
			<select id="lista1" name="lista1" class="form-control">
				<option value="0">Selecciona una opcion</option>
				<option value="1">America</option>
				<option value="2">Asia</option>
				<option value="3">Europa</option>
				<option value="4">Africa</option>
			</select><br><br>
			<br>
			<div id="select2lista"></div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"continente=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').select2();
	});
</script>


