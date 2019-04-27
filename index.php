<?php
	$cantidad=0;
	$nombres;


	//PHP ES UN LENGUAJE DE EXPRESIONES

	/*if($nombres)
		echo "este mensaje es si la expresion devuelve true"
		echo "<br/> LINEA 2: este mensaje es si la expresion devuelve true"
		*/
	if ($nombres) 
	{
			
	}



?>

<table>
	<tr>
		<th>nombres</th>
		<th>apellidos</th>
		<th>DNI</th>
	</tr>
	<?php if(1):?>
		<style type="text/css">
			td{
				background: green;
				color: white;
			}
		</style>
		<tr>
			<td>Luis</td>
			<td>Gutierres</td>
			<td>123456789</td>
		</tr>
		
		<tr>
			<td>juan</td>
			<td>huaroto</td>
			<td>987654321</td>
			
		</tr>
	<?php endif; ?>
	
</table>