
       <a href="javascript:confirmar()"   > <button class="btn  btn-standard btn-xs" style="width:43px; height:25px"><i class="glyphicon glyphicon-remove"></i></button></a>


<script language="Javascript"> 
function confirmar(){ 
confirmar=confirm("�Borrar?"); 
if (confirmar) 
	location.onclick=cargarlistado(17,1);

else 
	location.onclick=cargarformulario(8);
} 
</script>