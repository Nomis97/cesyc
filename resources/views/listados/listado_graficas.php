	<div class="box box-primary">
		<div class="box-header">
		</div>

		<div class="box-body" id="div_grafica_pfg">
		</div>

	    <div class="box-footer">
		</div>
	</div>

	<br/>
	<div class="box box-primary">
		<div class="box-header">
		</div>

		<div class="box-body" id="div_grafica_nucleo">
		</div>

	    <div class="box-footer">
		</div>
	</div>

	<br/>
	<div class="box box-primary">
		<div class="box-header">
		</div>

		<div class="box-body" id="div_grafica_pie">
		</div>

	    <div class="box-footer">
		</div>
	</div>


</div>

<script>
cargar_grafica_barras(<?= $anio; ?>,<?= intval($mes); ?>);
cargar_grafica_lineas(<?= $anio; ?>,<?= intval($mes); ?>);
cargar_grafica_nucleo();
cargar_grafica_pfg();

cargar_grafica_pie();

</script>

